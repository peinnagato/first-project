<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function userProfile(){
        try{

        }catch(\Exception $e){
            $e->getMessage();
        }finally{
            return view('user-profile.user-profile');
        }
    }
}
