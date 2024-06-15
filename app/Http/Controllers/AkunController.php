<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $response = Http::withToken($request->session()->get('accessToken'))->get('localhost:3000/akun')->collect();
        return view('superadmin.akun.index',[
            'akun'=>$response
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.akun.create',[
            // 'akun'=> $response
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
        )->post('http://localhost:3000/akun/add',$validatedData);
        
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
            'nama'=>'string',
            'no_telp'=>'string',
            'email'=>'string|email',
            'foto'=>'image|file|nullable',
        ]);

        if(!$request['foto']){
            $validatedData['foto'] = $request['fotoOld'];
        }

        $validatedData['updatedAt'] = now();
        // dd($request,$id,$validatedData);

        if(!isset($_FILES['foto'])){
            $response = Http::withToken($request->session()->get('accessToken'))->patch('http://localhost:3000/akun/'.$id,$validatedData);
        }else{
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'foto', file_get_contents($_FILES['foto']['tmp_name']), $_FILES['foto']['name']
            )->patch('http://localhost:3000/akun/'.$id,$validatedData);
        }

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
        $response = Http::withToken(request()->session()->get('accessToken'))->delete('http://localhost:3000/akun/'.$id);
        if($response->successful()){
            return redirect('/superadmin/akun')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/superadmin/akun')->with('message','gagal menghapus');
        } else {
            return redirect('/superadmin/akun')->with('message','erorr system 500');
        }
    }

    public function profile(){
        $response = Http::withToken(request()->session()->get('accessToken'))->get('http://localhost:3000/akun/'.request()->session()->get('id'));
        return view('profile',[
            'profile'=>$response
        ]);
    }

    public function password(Request $request, string $id){
        $validatedData = $request->validate([
            'oldpassword'=>'required',
            'newpassword'=>'required',
            'repeatpassword'=>'required',
            ]);
            
            
            $response = Http::withToken(request()->session()->get('accessToken'))->get('http://localhost:3000/akun/'.request()->session()->get('id'));
        if(!password_verify($request['oldpassword'],$response['password'])){
            return false;
        }

        if($validatedData['newpassword'] === $validatedData['repeatpassword']){
            $validatedData['password'] = $request['newpassword'];
        }

        $validatedData['updatedAt'] = now();

        if(!isset($_FILES['foto'])){
            $response = Http::withToken($request->session()->get('accessToken'))->patch('http://localhost:3000/akun/'.$id,$validatedData);
        }else{
            $response = Http::withToken($request->session()->get('accessToken'))->attach(
                'foto', file_get_contents($_FILES['foto']['tmp_name']), $_FILES['foto']['name']
            )->patch('http://localhost:3000/akun/'.$id,$validatedData);
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
