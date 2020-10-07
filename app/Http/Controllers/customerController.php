<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\eWalletAccount;
use App\Models\customer;
use App\Http\Controllers\errorMessage;

class customerController extends Controller
{
  public function createAccount(Request $request)
  {

   //if($_SERVER['REQUEST_METHOD']=='POST'){

     try {

       $Name = $request->input('Name');
       $PhoneNumber = $request->input('PhoneNumber');
       $Balance = $request->input('Balance');


       $payload=[
        'Name'=>$Name,
        'PhoneNumber'=>$PhoneNumber,
        'Balance' =>$Balance,

      ];

       $account=customer::create($payload);
       return $account;
       //return $name;

     } catch (\Exception $e) {
       echo "Conncted failed" .$e->getMessage();

     }

  }
}
