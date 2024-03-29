<?php

namespace App\Filters;

class PostFilter extends QueryFilter
{
    public function city($params = '')
    {
        return $this->builder->when($params, function ($query) use($params){
            $query->where('city', 'LIKE', '%'.$params.'%');
        });

    }

    public function search_field($search_string = ''){
        return $this->builder
            ->where('title', 'LIKE', '%'.$search_string.'%')
            ->orWhere('description', 'LIKE', '%'.$search_string.'%');
    }

    public function type($typeId = '')
    {
        return $this->builder->where('type', 'LIKE', '%'.$typeId.'%');
    }
    public function typeBuildings($typeId = '')
    {
        return $this->builder->where('typeBuildings', 'LIKE', '%'.$typeId.'%');
    }

    public function year($params = '')
    {
        return $this->builder->where('year', 'LIKE', '%'.$params.'%');
    }

    public function storey($params = '')
    {
        return $this->builder->where('storey', 'LIKE', '%'.$params.'%');
    }

    public function square($params = '')
    {
        return $this->builder->where('square', 'LIKE', '%'.$params.'%');
    }

    public function buy($params = '')
    {
        return $this->builder->where('buy', 'LIKE', '%'.$params.'%');
    }
    public function storey_home($params = '')
    {
        return $this->builder->where('storey_home', 'LIKE', '%'.$params.'%');
    }
    public function rooms($params = '')
    {
        return $this->builder->where('rooms', 'LIKE', '%'.$params.'%');
    }
}
