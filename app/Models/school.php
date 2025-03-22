<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class school extends Model
{
    protected $fillable = [
        "name",
        "address",
        "telp",
        "email",
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'work_area_current');
    }
}
