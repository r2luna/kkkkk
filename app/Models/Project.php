<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    public function path(): string
    {
        return route('projects.show', $this);
    }

    public function proposals(): HasMany
    {
        return $this->hasMany(Proposal::class);
    }
}
