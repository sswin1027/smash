<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $categories = [
        "Accessibility",
        "UX",
        "css",
        "JavaScript",
        "Performance",
        "Design",
        "Figma",
        "Wallpapers",
        "React",
        "Vue",
        "Round-Ups",
        "Web Design",
        "Guides",
        "Business",
        "Career",
        "Privacy",
        "Jump to all articles"
    ];
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->categories)
        ];
    }
}
