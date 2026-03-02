<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Kit;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'course_key' => $this->faker->unique()->bothify('Rob###'),
            'title' => $this->faker->sentence(4),
            'cover' => $this->faker->imageUrl(640, 480, 'robotics', true),
            'content' => $this->faker->paragraphs(3, true),
            'kit_id' => Kit::inRandomOrder()->value('id'),
        ];
    }
}