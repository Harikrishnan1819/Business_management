<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Branch::class;
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber()
        ];
    }
}
