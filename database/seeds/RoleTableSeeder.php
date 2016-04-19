<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //Perfil Administrador
        DB::table('roles')->insert([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Perfil de Administrador', // optional
            'parent_id' => NULL,
        ]);
        
        //Perfil Secretario Escolar
        DB::table('roles')->insert([
            'name' => 'Secretário Escolar',
            'slug' => 'secretario',
            'description' => 'Perfil de Secretário Escolar', // optional
            'parent_id' => NULL,
        ]);
        
        //Perfil Professor
        DB::table('roles')->insert([
            'name' => 'Professor',
            'slug' => 'professor',
            'description' => 'Perfil de Professor', // optional
            'parent_id' => NULL,
        ]);
        
        //Perfil de Estudante
        DB::table('roles')->insert([
            'name' => 'Estudante',
            'slug' => 'estudante',
            'description' => 'Perfil de Estudante', // optional
            'parent_id' => NULL,
        ]);
    }

}
