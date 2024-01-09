<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    public function activities()
    {
        return $this->hasMany(ProjectsActivity::class,'projectId');
    }
}
