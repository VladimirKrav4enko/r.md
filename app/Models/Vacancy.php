<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vacancy extends Model
{
    //

    /**
     * @return HasOne
     */
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    /**
     * @return HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * @return HasOne
     */
    public function experience()
    {
        return $this->hasOne(Experience::class, 'id', 'experience_id');
    }

    /**
     * @return HasOne
     */
    public function education()
    {
        return $this->hasOne(Education::class, 'id', 'education_id');
    }
}
