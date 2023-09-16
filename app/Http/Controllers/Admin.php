<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Admin extends Controller
{
// controlars for back1end part
public function dashboard(){
    return view("backend/dashboard");
}





// controlars for frontend part
    public function home(){
        return view('fontend/index');
    }
}
?>