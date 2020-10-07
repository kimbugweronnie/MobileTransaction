<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer;
use App\Models\eWalletAccount;

class transaction extends Model
{
    use HasFactory;
    public $table = 'transactions';
    public $timestamps = false;
    protected $fillable = [
        'eWallet_name',
        'eWallet_phoneNumber',
        'Transfer_Amount',
        'customer_phoneNumber',
        'customers_id',
        'eWalletaccounts_id',
        'Status',


    ];

    public function customers()
      {
          return $this->belongsTo('App\customer', 'customers_id');
      }
      public function ewalletaccounts()
        {
            return $this->belongsTo('App\eWalletAccount', 'eWalletaccounts_id');
        }

    public function setPasswordAttribute($Status)
      {
        $this->attributes['Status']="pending";
      }

}
