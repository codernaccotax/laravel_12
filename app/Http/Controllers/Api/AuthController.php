<?php

namespace App\Http\Controllers\Api;

use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function register(RegisterRequest $request)
    {
        try{
            $user=User::create([
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
                'user_type_id' => $request->user_type_id,
                'employee_id' => $request->employee_id,

            ]);
            

            if($user){
                // Optionally, generate an authentication token for the user
                $token = $user->createToken('auth_token')->plainTextToken;
                return ResponseHelper::success(array('user'=>$user,'token'=>$token), 'User registered successfully',201);
            }else{
                return ResponseHelper::error('Failed to register user');
            }
        }catch(Exception $e){
            return ResponseHelper::error($e->getMessage());
        }

    }


}
