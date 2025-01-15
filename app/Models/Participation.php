<?php

namespace App\Models;

use App\Models\Convention;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    /** @use HasFactory<\Database\Factories\ParticipationsFactory> */
    use HasFactory;

    protected $guarded = [];

    public function users() {
        return $this->belongsTo(User::class);
    }
    public function conventions () {
        return $this->belongsTo(Convention::class);
    }
}
