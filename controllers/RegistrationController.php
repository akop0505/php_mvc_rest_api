<?php
namespace controllers;

use core\Controller;
use models\User;

class RegistrationController extends Controller{

    public function signup(){
        $user = new User();
        $data = $this->request->data;

        $user->firstName = $data['firstName'];
        $user->lastName = $data['lastName'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        if($user->save()){
            return response(array_merge(["success"=>1],$user->getAttributes()));
        };

        return response(["message"=>"incorrect data ot the user by this username already exist"],400);
    }

    public function login(){
        $user = new User();
        $data = $this->request->data;
        $user->username = $data['username'];
        $user->password = $data['password'];
        if($user->login()){
            $token = $user->createToken();
            $response = [
                "token"=>$token,
                "user"=>$user->getAttributes()
            ];
            return response($response);
        }
        return response(["message"=>"incorrect the username or password"],400);
    }

    public function me(){
        return response($_SESSION['user'],200);
    }
}