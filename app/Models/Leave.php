<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Leave extends Model
{
    protected $fillable = [
        "user_id",
        "date_start",
        "end_start",
        "reason",
        "status",
    ];

    public function leave_to_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
