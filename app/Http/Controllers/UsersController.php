<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function fetchUsersSince($user_id){
        $response = HTTP::get('https://api.github.com/users?since='. $user_id);

        $users = json_decode($response->body());

        return $users;
    }
    
    public function fetchUsersDetails($user_name){

        $method_request = "get";
        $url = "https://api.github.com/users/". $user_name;
        $token = "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";
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => [
                "Accept: application/vnd.github+json",
                "Authorization: Bearer " . $token,
                "X-GitHub-Api-Version: 2022-11-28",
                "Content-Type: text/plain",
                "User-Agent: https://api.github.com/meta"
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
        ]);
        $output = curl_exec($ch);
        curl_close($ch);
        
        return $output;
    }
    public function fetchUsersRepos($user_name){
        $method_request = "get";
        $url = "https://api.github.com/users/". $user_name . "/repos";
        $token = "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";
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => [
                "Accept: application/vnd.github+json",
                "Authorization: Bearer " . $token,
                "X-GitHub-Api-Version: 2022-11-28",
                "Content-Type: text/plain",
                "User-Agent: https://api.github.com/meta"
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
        ]); 
        $output = curl_exec($ch);
        curl_close($ch);
        
        return $output;
    }
}
