<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncExp extends Model
{
    protected $table = 'incexp';
    protected $primaryKey = 'incexpID';
    protected $fillable = [
        'name', 'incExpType', 'userID'
    ];

    public function getIncExpTypeAttribute($value){
        if($value == 'income')
            return 'Income';
        else
            return 'Expense';
    }
}
