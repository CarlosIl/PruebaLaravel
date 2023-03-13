<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return 'Usuarios';

        $users = [
            'Joel',
            'Ellie',
            'Tess',
            'Tommy',
            'Bill',
            '<script>alert("Clicker")</script>'
        ];

        // return view('users', [
        //     'users' => $users,
        //     'title' => 'Listado de usuarios'
        // ]);

        // return view('users')
        //     ->with('users', $users)
        //     ->with('title', 'Listado de usuarios');

        $title = 'Listado de usuarios';

        #Para mostrar el array entero
        // dd(compact('title', 'users'));

        return view('users', compact('title', 'users'));
    }

    public function show($id){
        return "Mosatrando detalle del usuario: {$id}";
    }
}
