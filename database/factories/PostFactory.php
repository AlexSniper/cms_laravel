<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>$this->factory('App\User'),
            'title'=> $this->faker->sentence(10),
            'post_image'=>$this->faker->imageUrl('900', '300'),
            'body'=>$this->faker->paragraph
        ];
    }
}