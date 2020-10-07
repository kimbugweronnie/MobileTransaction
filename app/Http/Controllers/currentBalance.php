<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eWalletAccount;
use App\Models\customer;
use Illuminate\Support\Facades\DB;

class currentBalance extends Controller
{
  
    public function currentBalance($id)
    {
      try {
        $response=eWalletAccount::find($id);

        return $response->Balance;

      } catch (\Exception $e) {
          echo "Conncted failed" .$e->getMessage();

      }

    }

}
