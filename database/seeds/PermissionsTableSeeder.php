<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //Perfil Professor
        DB::table('permissions')->insert([
            'name' => 'Visualizar Dashboard',
            'slug' => 'view.dashboard',
            'description' => 'Pode Visualizar Dashboard', // optional
        ]);

        
    }

}
