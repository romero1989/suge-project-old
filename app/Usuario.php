<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    protected $fillable = ['nome', 'email', 'password', 'status'];
    

    public static function rules() {
        return [ 'nome' => 'required|min:2',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required|min:5',
            'contrasenha' => 'required|same:senha',
            'status' => 'required|regex:/^\d{1}$/',
            'telefone' => 'regex:/^\\(\d{2}\) \d{5}\-\d{4}$/'
        ];
    }
    
    public static function rulesUpdate() {
        return [ 'nome' => 'required|alpha|min:2',
            //'email' => 'required|email|unique:usuarios',
            'email' => 'required|email',
            'senha' => 'required|min:5',
            'contrasenha' => 'required|same:senha',
            'status' => 'required|regex:/^\d{1}$/',
            'telefone' => 'regex:/^\\(\d{2}\) \d{5}\-\d{4}$/'
        ];
    }
    
    public static function message() {
        return [ 'required' => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute deve conter no mínimo :min caracteres',            
            'unique' => 'O valor do campo :attribute já existe na base de dados!',
            'same' => 'O campo Senha e Confirmar senha devem ser iguais',
        ];
    }
    
}
