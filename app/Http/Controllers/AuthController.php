<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function register(Request $request){
        // dd(1,$request->all());
        $request->validate([
          'name'=>'required|string',
          'email'=>'required|email|unique:users',
          'password'=>'required|min:8|confirmed',
        ]);
        try{
            DB::beginTransaction();
             $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
             ]);
             Auth::login($user);
            DB::commit();
            return $this->success('user register succesfully');
        }
        catch(Exception $e){
           report($e);
           DB::rollBack();
           return $this->error($e->getMessage(),422);
        }
    }

    public function login(Request $request){
        $request->validate([
          'email'=>'required|email',
          'password'=>'required',
        ]);
        try{
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return $this->success('User logged in successfully');
            }
            return $this->error('Invalid Credential',422);
        }catch(Exception $e){
            report($e);
           
            return $this->error($e->getMessage(),422);
         }
    }

    public function logout(){
        try{
          Auth::logout();
          return $this->success('user is logout');
        }
        catch(Exception $e){
            report($e);
           
            return $this->error($e->getMessage(),422);
         }
    }
}
