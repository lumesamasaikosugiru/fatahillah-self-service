<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserEducation extends Model
{
    protected $fillable = [
        "user_id",
        "edu_level",
        "name_instation",
        "major",
        "start_year",
        "end_year",
    ];

    public function edu_user()
    {
        return $this->hasMany(User::class, 'user_id');
    }

}
