<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use illuminate\Http\Request;

class UsuarioController extends Controller
{

    function registrar(Request $dados) {
        return $dados;
    }

    function login(Request $dados){

    }
    function logout(Request $dados) {

    }
    function desativarConta(Request $dados) {

    }

    function fotoUpload(Request $dados) {

    }
    function editar(Request $dados) {

    }

    function perfil(Request $dados) {

    }
}

