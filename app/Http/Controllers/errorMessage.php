<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorMessage extends Controller
{
  public function getMessage()
  {
    $errorMessages=[
      
      'lowAccount'=>"Your account is too low to complete  transaction",
      'emptyRequest'=>"Add Amount please",


    ];
    return $errorMessages;
  }
}
