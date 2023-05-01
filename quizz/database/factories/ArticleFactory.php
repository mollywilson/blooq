<?php

namespace DatabaseFactories;

use IlluminateDatabaseEloquentFactoriesFactory;

class ArticleFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'excerpt' => $this->faker->paragraph(4),
            'body' => $this->faker->paragraph(15),
        ];
    }
}