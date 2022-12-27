<?php
declare(strict_types=1);


class Transaction
{
    private float $amount;
    // private $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addText(float $rate): Transaction // methods chaining
    {
        $this->amount += $this->amount * $rate / 10;
        return $this;
    }

    private function applyDiscount(float $rate){
        $this->amount += $this->amount * $rate / 100;
    }

    public function __destruct()
    {
        echo 'Destruct ' . $this->description . '<br />';
    }

}



