<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMutation extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "work_area_new",
        "employee_type_new",
        "start_duty",
        "end_duty",
        "status_new",
    ];

    public function mutation_user()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function work_area_new_schools()
    {
        return $this->hasMany(school::class, 'work_area_new');
    }
}
