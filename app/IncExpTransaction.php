<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncExpTransaction extends Model
{
    protected $table = 'incexp_transaction';
    protected $primaryKey = 'incexpTransacID';
    protected $fillable = [
        'projectsID', 'incexpID', 'amountIN', 'amountOut', 'drCR', 'transactionType', 'description', 'userID'
    ];

    public function project()
    {
        return $this->belongsTo('App\Projects', 'projectsID');
    }

    public function inc_exp()
    {
        return $this->belongsTo('App\IncExp', 'incexpID');
    }

}
