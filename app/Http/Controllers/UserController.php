<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB; 
use App\Models\User;
use Auth;
use Storage;
use File;

class UserController extends MessageController
{
    public function user(){                  
        $users = User::all();                   
        $confirmModal = $this->deleteConfirm('user', 'modal_delete_user', 'btn_delete');
        return view('user.user', compact('users', 'confirmModal'));
    }

    public function createUser()
    {
        return view('user.create_user');
    }

    public function storeUser(Request $request){        
        $request->validate([
            'nama' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users'
        ],
        [
            'required' => ':attribute wajib di isi',
            'unique' => ':attribute sudah ada silahkan isi dengan input yang berbeda',
            'min' => ':attribute minimal 8'
        ]);        
        
        user::create([
            'name' => $request->nama,
            'role_id' => $request->status,
            'username' => $request->username,
            'no_hp' => $request->no_hp,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);        
        $toast = $this->successToast('data user berhasil di tambahkan');                                
        return redirect()->route('user')->with('status', $toast);        
    }

    public function showUser($id){
        $user = User::findOrFail($id);
        return view('user.show_user', compact('user'));
    }

    public function editUser($id){
        $user = User::findOrFail($id);   
        $confirmModal = $this->saveConfirm('user', route('user'), 'confirm_modal', 'btn_submit');        
        return view('user.edit_user', compact('user', 'confirmModal'));
    }

    public function updateUser(Request $request){    
        $user = user::findOrFail($request->id);   
        $request->validate([
            'nama' => 'required',            
            'email' => 'sometimes|required|email|unique:users,email,'.$user->id,
            'username' => 'sometimes|required|unique:users,username,'.$user->id
        ],
        [
            'required' => ':attribute wajib di isi',
            'unique' => ':attribute sudah ada silahkan isi dengan input yang berbeda',
            'min' => ':attribute minimal 8'
        ]);             
        $user->role_id = $request->status;
        $user->name = $request->nama;    
        $user->username = $request->username;
        $user->no_hp = $request->no_hp;
        $user->jk = $request->jk;
        $user->alamat = $request->alamat;
        $user->email = $request->email;
        if(isset($request->password)){
            $user->password = Hash::make($request->password);
        }        
        $user->save();

        $toast = $this->successToast('data user berhasil di perbaharui');                                
        return redirect()->route('user')->with('status', $toast);   
    }

    public function deleteUser($id){
        user::findOrFail($id)->delete();
        $toast = $this->successToast('data user berhasil di hapus');                                
        return redirect()->back()->with('status', $toast);
    }

    public function editProfile(){
        $user = user::findOrFail(Auth::id());   
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request){
        $user = user::findOrFail(Auth::id());        
        $user->no_hp = $request->no_hp;        
        $user->alamat = $request->alamat;         
        if($request->profile_image){
            if($user->foto != null){                
                File::storage(storage_path('app/public/profile'). '/' . $user->foto);
                $request->profile_image->storage('app/public/profile');                  
            }else{
                $request->profile_image->store('public/profile');
            }                           
            $user->foto = $request->profile_image->hashName();
        }
        if(isset($request->new_password)){
            if (Hash::check($request->password, $user->password)) {             
                $user->password = Hash::make($request->new_password);                                                  
             } else {                    
                return redirect()->back()->with('error', 'Password lama tidak sesuai, pembaharuan password telah dibatalkan');
             }  
        }
        $user->save();                     
        return redirect()->route('home');                            
    }
}
