<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $response = Http::withToken($request->session()->get('accessToken'))->get(env('APP_API_URL').'/akun')->collect();
        return view('superadmin.akun.index',[
            'title' => 'admin-akun',
            'akun'=>$response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.akun.create',[
            'title' => 'admin-tambah akun',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required|string',
            'no_telp'=>'required|numeric|min:11',
            'password'=>'required|min:8',
            'email'=>'required|email',
            'foto'=>'required|image|file',
            'role'=>'required',
        ]);

        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::attach(
            'foto', file_get_contents($_FILES['foto']['tmp_name']), $_FILES['foto']['name']
        )->post(env('APP_API_URL').'/akun/add',$validatedData);

        if($response->successful()){
            return redirect('/superadmin/akun')->with('message',$response->reason());
        }elseif ($response->failed()) {
            return redirect('/superadmin/akun')->with('message',$response->reason());
        } else {
            return redirect('/superadmin/akun')->with('message',$response->reason());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    // Validate incoming request
    $validatedData = $request->validate([
        'nama' => 'string',
        'no_telp' => 'string',
        'email' => 'string|email',
        'foto' => 'nullable|mimes:jpeg,jpg,png,gif|max:2048' // Adding validation for image files
    ]);

    // If no new image is uploaded, keep the old image
    if (!$request->hasFile('foto')) {
        $validatedData['foto'] = $request->input('fotoOld');  // Use the old photo if no new photo is uploaded
    } else {
        // New image file uploaded, need to attach it
        $file = $request->file('foto');  // Get the uploaded file
        $validatedData['foto'] = $file->getClientOriginalName();  // Store the file name in the session instead
    }

    // Add timestamp
    $validatedData['updatedAt'] = now();

    // Handle the request with or without an image
    if (!$request->hasFile('foto')) {
        // No new image file uploaded
        $response = Http::withToken($request->session()->get('accessToken'))
            ->patch(env('APP_API_URL') . '/akun/' . $id, $validatedData);
    } else {
        // New image file uploaded, need to attach it
        $file = $request->file('foto');  // Get the uploaded file

        $response = Http::withToken($request->session()->get('accessToken'))
            ->attach(
                'foto', file_get_contents($file->getPathname()), $file->getClientOriginalName()
            )->patch(env('APP_API_URL') . '/akun/' . $id, $validatedData);
    }

    // Update session with new data (except the file, which is not serializable)
    Session::put([
        'nama' => $validatedData['nama'],
        'no_telp' => $validatedData['no_telp'],
        'email' => $validatedData['email'],
        'foto' => $validatedData['foto'], // Store the filename, not the file object
    ]);

    // Handle response
    if ($response->successful()) {
        return redirect('/profile')->with('message', 'Berhasil mengupdate');
    } elseif ($response->failed()) {
        return redirect('/profile')->with('message', 'Gagal mengupdate');
    } else {
        return redirect('/profile')->with('message', 'Error system 500');
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = Http::withToken(request()->session()->get('accessToken'))->delete(env('APP_API_URL').'/akun/'.$id);
        if($response->successful()){
            return redirect('/superadmin/akun')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/superadmin/akun')->with('message','gagal menghapus');
        } else {
            return redirect('/superadmin/akun')->with('message','erorr system 500');
        }
    }

    public function profile(){
        $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/akun/'.request()->session()->get('id'))->collect();
        return view('profile',[
            'title' => 'profile',
            'profile'=>$response
        ]);
    }

    public function password(Request $request, string $id){
        $validatedData = $request->validate([
            'oldpassword'=>'required',
            'newpassword'=>'required',
            'repeatpassword'=>'required',
            ]);


            $response = Http::withToken(request()->session()->get('accessToken'))->get(env('APP_API_URL').'/akun/'.request()->session()->get('id'));
        if(!password_verify($request['oldpassword'],$response['password'])){
            return false;
        }

        if($validatedData['newpassword'] === $validatedData['repeatpassword']){
            $validatedData['password'] = $request['newpassword'];
        }

        $validatedData['updatedAt'] = now();

        if(!isset($_FILES['foto'])){
            $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL').'/akun/'.$id,$validatedData);
        }else{
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'foto', file_get_contents($_FILES['foto']['tmp_name']), $_FILES['foto']['name']
            )->patch(env('APP_API_URL').'/akun/'.$id,$validatedData);
        }

        if($response->successful()){
            return redirect('/profile')->with('message','berhasil mengupdate');
        }elseif ($response->failed()) {
            return redirect('/profile')->with('message','gagal mengupdate');
        } else {
            return redirect('/profile')->with('message','erorr system 500');
        }
    }
}
