<?php

namespace App\Models;

use Illuminate\Http\Request;

abstract class QueryFilter
{
    /**
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $builder;
    protected $request;

    public function __construct($builder, Request $request)
    {
        $this->builder = $builder;
        $this->request = $request;
    }

    public function apply()
    {
        foreach ($this->filters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    public function filters()
    {
        return $this->request->all();
    }
}
