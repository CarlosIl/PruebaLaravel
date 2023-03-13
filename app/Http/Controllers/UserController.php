<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return 'Usuarios';
        return view('users');
    }

    public function show($id){
        return "Mosatrando detalle del usuario: {$id}";
    }
}
