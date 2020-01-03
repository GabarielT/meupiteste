<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Redireciona para a pagina principal de usuario
    public function welcome() {
        return view('pages.user_log.first_page_user');
    }
}
