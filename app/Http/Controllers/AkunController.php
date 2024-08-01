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
            'nama'=>'required',
            'no_telp'=>'required',
            'password'=>'required',
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
        $validatedData = $request->validate([
            'title'=>'admin-edit akun',
            'nama'=>'string',
            'no_telp'=>'string',
            'email'=>'string|email',
            'c'=>'image|file|nullable',
        ]);

        if(!$request['foto']){
            $validatedData['foto'] = $request['fotoOld'];
        }

        $validatedData['updatedAt'] = now();
        // dd($request,$id,$validatedData);

        if(!isset($_FILES['foto'])){
            $response = Http::withToken($request->session()->get('accessToken'))->patch(env('APP_API_URL').'/akun/'.$id,$validatedData);
        }else{
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'foto', file_get_contents($_FILES['foto']['tmp_name']), $_FILES['foto']['name']
            )->patch(env('APP_API_URL').'/akun/'.$id,$validatedData);
        }

        Session::put([
            'nama'=>$validatedData['nama'],
            'no_telp'=>$validatedData['no_telp'],
            'email'=>$validatedData['email'],
            'email'=>$validatedData['email'],
        ]);

        if($response->successful()){
            return redirect('/profile')->with('message','berhasil mengupdate');
        }elseif ($response->failed()) {
            return redirect('/profile')->with('message','gagal mengupdate');
        } else {
            return redirect('/profile')->with('message','erorr system 500');
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
