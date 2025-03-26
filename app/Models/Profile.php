<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class,'emp_id');
    }
}
