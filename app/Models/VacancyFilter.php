<?php

namespace App\Models;

use Illuminate\Http\Request;

class VacancyFilter extends QueryFilter
{

    /**
     * @param $value
     */
    public function query($value)
    {
        $this->builder = $this->builder->where(
            function ($query) use ($value) {
                $query->where('name', 'like', "%$value%")
                    ->orWhere('description', 'like', "%$value%");
            }
        );
    }

    /**
     * @param $value
     */
    public function startDate($value)
    {
        if ($value) {
            $this->builder = $this->builder->where('created_at', '>', date('Y-m-d H:i:s', strtotime($value)));
        }
    }

    /**
     * @param $value
     */
    public function endDate($value)
    {
        if ($value) {
            $this->builder = $this->builder->where('created_at', '<=', date('Y-m-d 23:59:59', strtotime($value)));
        }
    }

    /**
     * @param $value
     */
    public function categoryId($value)
    {
        if ($value) {
            $this->builder = $this->builder->where('category_id', '=', $value);
        }
    }

    /**
     * @param $value
     */
    public function cityId($value)
    {
        if ($value) {
            $this->builder = $this->builder->where('city_id', '=', $value);
        }
    }
}
