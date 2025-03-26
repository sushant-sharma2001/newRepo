<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    function profile(): HasOne
    {
        return $this->hasOne(Profile::class,'emp_id');
    }

    function contact(): HasMany
    {
        return $this->hasMany(Contact::class,'emp_id');
    }
}
