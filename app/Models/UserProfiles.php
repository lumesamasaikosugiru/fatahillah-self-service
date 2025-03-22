<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserProfiles extends Model
{
    protected $fillable = [
        "id_user",
        "no_kk",
        "no_nik",
        "religion",
        "place_born",
        "date_born",
        "jk",
        "road",
        "district",
        "city",
        "pc",
        "marital",
        "child_total",
        "emergency_contact",
        "relatation_contact",
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');

    }
}
