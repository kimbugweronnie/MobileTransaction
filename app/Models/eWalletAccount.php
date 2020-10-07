<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eWalletAccount extends Model
{
    use HasFactory;
    public $table = 'eWalletAccounts';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'phoneNumber',
        'Balance',
        'pin',
    ];

}
