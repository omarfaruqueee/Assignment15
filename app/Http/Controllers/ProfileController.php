<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id){

        $name = "Donal Trump";
        $age = "75";
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        $response = response()->json($data);
        $response->cookie($cookieName,$cookieValue,$cookieMinutes,$cookiePath,$cookieDomain,$cookieSecure,$cookieHttpOnly );
        return $response;
    }
}
