<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nome' => 'João Silva',
            'email' => 'joao.silva@example.com',
            'senha' => Hash::make('senha123'), // Usando Hash::make para criptografar a senha
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Maria Oliveira',
            'email' => 'maria.oliveira@example.com',
            'senha' => Hash::make('senha456'),
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Carlos Pereira',
            'email' => 'carlos.pereira@example.com',
            'senha' => Hash::make('senha789'),
        ]);
    }
}
