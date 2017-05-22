<?php

namespace SisCad\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->user_status_id=='1')
        {
            Auth::logout();

            Session::flash('flash_message_danger', 'Opss, a sua conta nao esta ATIVADA ! Caso este problema persista, favor entrar em contato com o Administrador.');

            return redirect('/login');
        }
        return view('home');
    }
}
