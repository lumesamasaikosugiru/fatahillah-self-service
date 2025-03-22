<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserExperience extends Model
{
    protected $fillable = [
        ""
    ];


    public function exp_user()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
