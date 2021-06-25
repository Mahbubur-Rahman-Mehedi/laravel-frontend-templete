<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
    public function dashboard(){
        return view('user.dashboard');
    }
    public function profile(){
        return view('user.profile');
    }
    public function history(){
        return view('user.history');
    }

    public function details(){
        return view('user.detailsHistory');
    }

    public function follow(){
        return view('user.followList');
    }
    public function orders(){
        return view('user.orders');
    }

    public function order(){
        return view('user.order');
    }
    public function orderConfirm(){
        // addtional database work
        return view('user.orders');
    }

    public function notification(){
        return view('user.notification');
    }
    public function messages(){
        return view('user.messages');
    }
=======
    public function index() {
        return view('user.userHome');
    }

    public function edit() {
        return view('user/editProfile');
    }

    public function history() {
        return view('user/history');
    }
    public function detailsHistory() {
        return view('user/detailsHistory');
    }
    public function follow() {
        return view('user/followList');
    }

    public function register() {
        return view('user/userRegister');
    }

>>>>>>> 14756a6b696b4df472734727cf2fdd185223d56c
}
