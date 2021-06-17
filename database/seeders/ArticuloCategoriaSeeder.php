<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('articulo_categoria')->insert([
            'articulo_id' => '1',
            'categoria_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articulo_categoria')->insert([
            'articulo_id' => '1',
            'categoria_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        DB::table('articulo_categoria')->insert([
            'articulo_id' => '2',
            'categoria_id' => '7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articulo_categoria')->insert([
            'articulo_id' => '2',
            'categoria_id' => '8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articulo_categoria')->insert([
            'articulo_id' => '3',
            'categoria_id' => '8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articulo_categoria')->insert([
            'articulo_id' => '3',
            'categoria_id' => '9',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articulo_categoria')->insert([
            'articulo_id' => '4',
            'categoria_id' => '8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articulo_categoria')->insert([
            'articulo_id' => '5',
            'categoria_id' => '6',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
