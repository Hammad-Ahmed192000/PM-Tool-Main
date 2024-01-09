<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsActivity extends Model
{
    use HasFactory;
    protected $table = 'project_activity';
    public function project()
    {
        return $this->belongsTo(Projects::class);
    }

    public function tasks()
    {
        return $this->hasMany(projectsTasks::class,'activityId');
    }
}
