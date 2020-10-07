<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\MoneyTransfer;
use App\Models\transaction;

use Illuminate\Http\Request;

class TransactionList extends Controller
{

public function transactionlist($phoneNumber)
{
  try {
    
    $records = transaction::where('customer_phoneNumber', $phoneNumber)->get();

      if(count($records)==0){
        $NotFound='No transactions yet';
        return $NotFound;

      }else{
        return $records;

      }



  } catch (\Exception $e) {


  }
}


}
