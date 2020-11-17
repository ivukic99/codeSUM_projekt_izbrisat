<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;

class AuthController extends Controller{
    public function login(){
        $passwordGrantClient = Client::where('password_client', 1)->first();
        $http = new \GuzzleHttp\Client();

        $response = $http->post('http://127.0.0.1:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'snk1Yy6qzb9iTpOTuqoFm7RFJN6Q6siIa1uPSzl6',
                'username' => 'igor@gmail.com',
                'password' => 'password',
                'scope' => '',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }
    

    public function register(UserRegisterRequest $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if (!$user){
            return response()->json(["seccess" => false, "massage" => "Registration failed"], 500);
        }

        return response()->json(["seccess" => true, "massage" => "Registration success"]);
    }
}
?>
