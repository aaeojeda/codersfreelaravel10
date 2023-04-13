<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//en versiones anteriores se tenia que definir el modelo
//en versiones anteriores se tenia que definir el modelo
//use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Curso>
 */
class CursoFactory extends Factory
{
    //En las versiones anteriores se tenia que definir el modelo
    //En las versiones anteriores se tenia que definir el modelo
    //protected $model = Curso::class;
    
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->sentence(),
            'descripcion'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['DesWeb','DisWeb'])
        ];
    }
}
