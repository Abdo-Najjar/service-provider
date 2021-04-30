<?php

namespace App\Services;

class DebitPament
{

    public $cardId;

    public function __construct($cardId)
    {
        $this->cardId = $cardId;
    }

    public function withDraw()
    {
        echo " DebitPament drawed";
    }


    public function deposit()
    {
        echo " DebitPament deposit";
    }
}
