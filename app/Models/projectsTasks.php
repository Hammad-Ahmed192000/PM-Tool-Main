<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectsTasks extends Model
{

    use HasFactory;
    public function activity()
    {
        return $this->belongsTo(ProjectsActivity::class,'activityId');
    }
}
