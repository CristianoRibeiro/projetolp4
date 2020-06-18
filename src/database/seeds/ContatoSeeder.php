<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->insert([
            'nome'  =>  'Admin R',
            'email' =>  'admin@domain.com',
            'telefone' => Str::of('(61) 98888-1000')->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'endereco' => 'Rua 33 Sul',
        ]);
    }
}
