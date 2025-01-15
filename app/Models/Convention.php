<?php

namespace App\Models;

use App\Models\Participation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    /** @use HasFactory<\Database\Factories\ConventionFactory> */
    use HasFactory;

    protected $guarded = [];

    public function participations() {
        return $this->hasMany(Participation::class);
    }
}
