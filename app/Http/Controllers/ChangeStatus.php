<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use App\Http\Controllers\GetTransactionStatus;


class ChangeStatus extends Controller
{
  
    public function changeToSuccess($transactions_id){
      $checkingStatus = new GetTransactionStatus();
      $currentStatus = $checkingStatus->GetTransactionStatus($transactions_id);
      $response=transaction::find($transactions_id);
      $response->Status = 'Success';

       $response->save();


      return $response;



    }
    public function changeToFailed($transactions_id)
    {
      $checkingStatus = new GetTransactionStatus();
      $currentStatus = $checkingStatus->GetTransactionStatus($transactions_id);
      $response=transaction::find($transactions_id);
      $response->Status = 'Failed';

       $response->save();


      return $response;
    }
}
