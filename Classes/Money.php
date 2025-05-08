<?php

class Money
{
    private int $units;
    private int $cents;

    public function __construct(int $units, int $cents) {
        $this->units = $units;
        $this->cents = $cents;
    }

    public function setAmount(int $units, int $cents): void {
        $this->units = $units;
        $this->cents = $cents;
    }

    public function __toString(): string {
        return sprintf("%d.%02d", $this->units, $this->cents);
    }

    public function decrease(int $units, int $cents): void {
        $total = $this->units * 100 + $this->cents - ($units * 100 + $cents);
        $total = max(0, $total);
        $this->units = intdiv($total, 100);
        $this->cents = $total % 100;
    }
}