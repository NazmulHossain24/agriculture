<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBook extends Model
{
    protected $table = 'bank_book';
    protected $primaryKey = 'bankBookID';
    protected $fillable = [
        'bankID', 'bank_info', 'amountIN', 'amountOut', 'drCR', 'description', 'userID'
    ];

    public function bank()
    {
        return $this->belongsTo('App\BankInfo', 'bankID');
    }
}
