<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use \Str;

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
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'is_active' => 1,
            'content' => $this->faker->text(),
            'created_at' => $this->getRandomTimestamps()['created_at'],
            'updated_at' => $this->getRandomTimestamps()['updated_at']
        ];
    }

    /**
     * Get random timestamps
     * @param int $backwardDays
     * @return array
     */
    function getRandomTimestamps($backwardDays = -800)
    {
        $backwardCreatedDays = rand($backwardDays, 0);
        $backwardUpdatedDays = rand($backwardCreatedDays + 1, 0);

        return [
            'created_at' => \Carbon\Carbon::now()->addDays($backwardCreatedDays)->addMinutes(rand(0,
                60 * 23))->addSeconds(rand(0, 60)),
            'updated_at' => \Carbon\Carbon::now()->addDays($backwardUpdatedDays)->addMinutes(rand(0,
                60 * 23))->addSeconds(rand(0, 60))
        ];
    }
}
