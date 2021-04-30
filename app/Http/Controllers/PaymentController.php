<?php

namespace App\Http\Controllers;

use App\Services\Debit;
use App\Services\DebitPament;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function withDraw(DebitPament $debitPament)
    {

        dd($debitPament);
        return $debitPament->withDraw();
    }
}
