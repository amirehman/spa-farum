<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Category extends Model
{
    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = [];
}
