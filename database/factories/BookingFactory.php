<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $today = now();
        $until = $today->addDay(2);
        return [
            "user_id"       => User::inRandomOrder()->first()->id,
            "full_name"     => fake()->name(),
            "email"         => fake()->safeEmail(),
            "adult_count"   => fake()->numberBetween(1, 5),
            "child_count"   => fake()->numberBetween(1, 5),
            "check_in"      => $today,
            "check_out"     => $until,
            "price"         => fake()->numberBetween(100, 300),
            "purpose"       => fake()->sentence()
        ];
    }
}
