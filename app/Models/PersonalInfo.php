<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_Info extends Model
{
    /** @use HasFactory<\Database\Factories\PersonalInfoFactory> */
    use HasFactory;

    protected $guarded = [];

    public function users () {
        return $this->belongsTo(User::class);
    }
}
