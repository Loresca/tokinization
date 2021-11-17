<?php

namespace App\Repositories;

use App\Models\MobileLegendStat;
use App\Repositories\BaseRepository;

/**
 * Class MobileLegendStatRepository
 * @package App\Repositories
 * @version October 25, 2021, 11:57 am UTC
*/

class MobileLegendStatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MobileLegendStat::class;
    }
}
