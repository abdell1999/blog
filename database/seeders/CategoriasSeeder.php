<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('categorias')->insert([
            'nombre' => 'Ciencia Ficción',
            'descripcion' => 'Ciencia ficción es la denominación de uno de los géneros derivados de la literatura de ficción, junto con la literatura fantástica y la narrativa de terror. Algunos autores estiman que el término es una mala traducción del inglés science fiction y que la correcta es ficción científica.1​ Nacida como género en la década de 1920 (aunque hay obras reconocibles muy anteriores) y exportada posteriormente a otros medios, como el cinematográfico, historietístico y televisivo, tiene un gran auge desde la segunda mitad del siglo xx debido al interés popular acerca del futuro que despertó el espectacular avance tanto científico como tecnológico alcanzado durante todos estos años.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Comedia',
            'descripcion' => 'La comedia es un género dramático que busca entretener y hacer reír a su público y para eso apela a recursos como el sarcasmo, la parodia, la ironía o la confusión. ... Los protagonistas de las comedias suelen representar arquetipos, con cualidades estereotipadas. Por ejemplo: el galán, el avaro, el vago, el mentiroso.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Actualidad',
            'descripcion' => 'Aquí se tratan temas diversos contemporáneos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Drama',
            'descripcion' => 'El género dramático es aquel que está destinado a ser representado ante un auditorio y que está escrito en formato de diálogos. Por ejemplo: Hamlet (William Shakespeare), Edipo Rey (Sófocles), La vida es sueño (Pedro Calderón de la Barca).',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Suspense',
            'descripcion' => 'Expectación impaciente o ansiosa por el desarrollo de una acción o suceso, especialmente en una película cinematográfica, una obra teatral o un relato.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Deportes',
            'descripcion' => 'Incluye noticias de actualidad y columnas de opinión sobre diferentes deportes dentro del ámbito zonal, nacional e internacional.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('categorias')->insert([
            'nombre' => 'Videojuegos',
            'descripcion' => 'Todo sobre tus videojuegos favoritos, reviews, betas y noticias sobre los juegos más esperados',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        DB::table('categorias')->insert([
            'nombre' => 'Tecnología',
            'descripcion' => 'Todo sobre el mundillo tecnológico',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        DB::table('categorias')->insert([
            'nombre' => 'Comercio',
            'descripcion' => 'Con los artículos que encontrarás en esta categoría no volveras perder una rebaja',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
