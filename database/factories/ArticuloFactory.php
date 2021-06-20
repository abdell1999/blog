<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=> "LOREM IPSUM",
            'contenido'=> "CONTENIDO",
            'user_id'=> $this->faker->randomElement($array=array('1', '2', '3', '4', '5')),
            'imagen' =>'upload_images/noimage.png',
            'enableComentary' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
