<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eWalletAccount;
use App\Models\customer;
use App\Models\transaction;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ChangeStatus;
use App\Http\Controllers\errorMessage;
use App\Http\Middleware\requestMiddleware;


class MoneyTransfer extends Controller
{


  public function MoneyTransfer(Request $request)
  {

    try {
      $Amount=request("Amount");
      $phoneNumber=request("PhoneNumber");
     $pin=request("pin");
     

    $response = customer::where('PhoneNumber', $phoneNumber)->get();
    $res=eWalletAccount::where('pin', $pin)->get();

    $defaultStatus="pending";
    //return $res;

    $transactionPayload=[
      'eWallet_name'=>$res[0]->name,
      'eWallet_phoneNumber'=>$res[0]->phoneNumber,
      'Transfer_Amount'=>$Amount,
      'customer_phoneNumber'=>$response[0]->PhoneNumber,
      'eWalletaccounts_id'=>$res[0]->id,
      'customers_id'=>$response[0]->id,
      'Status'=>$defaultStatus

    ];

      $transaction=transaction::create($transactionPayload);
      //return $transaction;
     //return $transactionPayload['Transfer_Amount'];

      if($transactionPayload['Transfer_Amount']==0){
        $changingStatus = new ChangeStatus();
        $changingtoFailed=$changingStatus->changeToFailed($transaction->id);
        $resp=transaction::find($transaction->id);
        $resp->Status = 'Failed';
        $resp->save();
        $Message=new errorMessage();
        $theMessage=$Message->getMessage();
        $notification=$theMessage['Not a number'];

        return $notification;
}
      if ($res[0]->Balance==0 ||$res[0]->Balance < $transactionPayload['Transfer_Amount'])

      {

        $changingStatus = new ChangeStatus();
        $changingtoFailed=$changingStatus->changeToFailed($transaction->id);
        $resp=transaction::find($transaction->id);
        $resp->Status = 'Failed';
        $resp->save();
        $Message=new errorMessage();
        $theMessage=$Message->getMessage();
        $notification=$theMessage['lowAccount'];
        return $theMessage['lowAccount'];

      }
      else{
       $eWalletcurrentBalance=$res[0]->Balance-$transactionPayload['Transfer_Amount'];
       //return $eWalletcurrentBalance;
      $customer_currentBalance=$response[0]->Balance+$transactionPayload['Transfer_Amount'];

      // $customer_currentBalance;
      $res[0]->Balance = $eWalletcurrentBalance;

      $res[0]->save();
      // return $res[0];
      $response[0]->Balance = $customer_currentBalance;
      $response[0]->save();
      // $response[0];
      $resp=transaction::find($transaction->id);
      $resp->Status = 'Success';
      $resp->save();
      return $resp;

}
    } catch (\Exception $e) {

    }




  }


}
