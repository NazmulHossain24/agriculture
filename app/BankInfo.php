<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    protected $table = 'bank_info';
    protected $primaryKey = 'bankID';
    protected $fillable = [
        'name', 'accountNumber', 'userID'
    ];
}
