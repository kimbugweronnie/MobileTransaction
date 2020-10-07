<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

class GetTransactionStatus extends Controller
{
    public function GetTransactionStatus($transactions_id)
    {
      try {
        $response=transaction::find($transactions_id);

        return $response->Status;

      } catch (\Exception $e) {

      }

    }
}
