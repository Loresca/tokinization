<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MobileLegendStat
 * @package App\Models
 * @version October 25, 2021, 11:57 am UTC
 *
 * @property string $mobile_legend_id
 * @property string $best_hero
 * @property string $most_mvp
 * @property string $most_kills
 * @property string $best_farmer
 * @property string $most_win_hero
 * @property integer $max_number_of_kills
 * @property integer $max_number_of_death
 */
class MobileLegendStat extends Model
{

    use HasFactory;

    public $table = 'mobile_legends_stats';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'mobile_legend_id',
        'best_hero',
        'most_mvp',
        'most_kills',
        'best_farmer',
        'most_win_hero',
        'max_number_of_kills',
        'max_number_of_death'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mobile_legend_id' => 'string',
        'best_hero' => 'string',
        'most_mvp' => 'string',
        'most_kills' => 'string',
        'best_farmer' => 'string',
        'most_win_hero' => 'string',
        'max_number_of_kills' => 'integer',
        'max_number_of_death' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mobile_legend_id' => 'required|string|max:255',
        'best_hero' => 'required|string|max:255',
        'most_mvp' => 'required|string|max:255',
        'most_kills' => 'required|string|max:255',
        'best_farmer' => 'required|string|max:255',
        'most_win_hero' => 'required|string|max:255',
        'max_number_of_kills' => 'required|integer',
        'max_number_of_death' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
