<?php

namespace Database\Factories\Backend;

use App\Models\Backend\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      =>  $this->faker->name,
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
        ];
    }
}
