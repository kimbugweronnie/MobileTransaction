<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\eWalletAccount;
use App\Models\customer;
use App\Http\Controllers\errorMessage;

class UserController extends Controller
{



    public function createAccount(Request $request)
   {



       try {

         $name = $request->input('name');
         $phoneNumber = $request->input('phoneNumber');
         $Balance = $request->input('Balance');
         $pin = $request->input('pin');

         $payload=[
          'name'=>$name,
          'phoneNumber'=>$phoneNumber,
          'Balance' =>$Balance,
          'pin'=>$pin,
        ];

         $account=eWalletAccount::create($payload);
         return $account;
         //return $name;

       } catch (\Exception $e) {
         echo "Conncted failed" .$e->getMessage();

       }

}
    public function createCustomerAccount(Request $request)
    {
      try {
        $name = $request->input('name');
        $phoneNumber = $request->input('phoneNumber');
        $Balance = $request->input('Balance');

        $Customerpayload=[
         'name'=>$name,
         'phoneNumber'=>$phoneNumber,
         'Balance' =>$Balance,

       ];

        $Customeraccount=customer::create($Customerpayload);
        return $Customeraccount;
        



      } catch (\Exception $e) {
        echo "Conncted failed" .$e->getMessage();

      }





}

}
