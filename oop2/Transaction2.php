<?php
declare(strict_types=1);

class Transaction2
{
    private float $amount;

    public function __construct(
        float $amount,
        private $description
    )
    {
        $this->amount = $amount;
    }
}




?>