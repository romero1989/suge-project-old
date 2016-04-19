<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
//use App\Usuario;
use App\User;
use Validator;

class UsuarioController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        //$usuarios = Usuario::all();
        $usuarios = User::all();
        return view('usuario.index', ['usuarios' => $usuarios]);
    }

    public function create() {
        return view('usuario.create');
    }

    public function store() {

        $input = Input::all();

        $validator = Validator::make($input, Usuario::rules(), Usuario::message());

        if ($validator->fails()) {
            return redirect('usuario/create')
                            ->withErrors($validator)
                            ->withInput();
        }

        Usuario::create($input);

        return redirect()->back()->with('flash_message', 'Usuário criado com suscesso!');
    }

    public function show($id) {
        $usuario = Usuario::find($id);
        return view('usuario.show', ['usuario' => $usuario]);
    }

    public function edit($id) {
        $usuario = User::find($id);
        return view('usuario.edit', ['usuario' => $usuario]);
    }

    public function update($id) {
        $usuario = Usuario::findOrFail($id);

        $input = Input::all();

        $validator = Validator::make($input, Usuario::rules(), Usuario::message());

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        $usuario->fill($input)->save();

        return redirect()->back()->with('flash_message', 'Usuário atualizado com suscesso!');
    }

    public function delete($id) {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect('usuario')->with('flash_message', 'Usuário deletado com suscesso!');
    }

}
