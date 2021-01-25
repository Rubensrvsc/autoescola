<?php

use Illuminate\Database\Seeder;
use App\Models\usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::insert('insert into usuario (nome, usuario,cpf,senha,nivel) values 
        (?, ?,?,?,?)', array('rubens', 'rubens','000.000.000-00','1234','admin'));
        DB::insert('insert into usuario (nome, usuario,cpf,senha,nivel) values 
        (?, ?,?,?,?)', array('victor', 'victor','111.111.111-11','1234','recep'));

        //usuarios::all();
    }
}
