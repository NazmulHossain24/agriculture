<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'projectsID';
    protected $fillable = [
        'name', 'description', 'userID'
    ];
}
