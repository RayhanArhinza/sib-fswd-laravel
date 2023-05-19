<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function create(){
        return 'ini halaman create';

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
}
