<?php

namespace Database\Factories;

use App\Models\MobileLegendStat;
use Illuminate\Database\Eloquent\Factories\Factory;

class MobileLegendStatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MobileLegendStat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mobile_legend_id' => $this->faker->word,
        'best_hero' => $this->faker->word,
        'most_mvp' => $this->faker->word,
        'most_kills' => $this->faker->word,
        'best_farmer' => $this->faker->word,
        'most_win_hero' => $this->faker->word,
        'max_number_of_kills' => $this->faker->randomDigitNotNull,
        'max_number_of_death' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
