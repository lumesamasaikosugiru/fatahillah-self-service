<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserExperience extends Model
{
    protected $fillable = [
        "user_id",
        "company",
        "position",
        "start_year",
        "end_year",
    ];


    public function exp_user()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
