<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    protected $fillable = [
        "user_id",
        "school_id",
        "employee_type",
        "start_date",
        "end_date",
        "status",
    ];


}
