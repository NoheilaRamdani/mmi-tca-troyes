<?php

namespace App\Service;

class DiscountCalculator
{
    public function calculateDiscount(float $amount, bool $isVip): float
    {
        $discount = 0.0;

        // 10 % de remise si le montant est strictement supérieur à 100 €
        if ($amount > 100) {
            $discount += $amount * 0.10;
        }

        // Remise supplémentaire de 5 % pour les clients VIP
        if ($isVip) {
            $discount += $amount * 0.05;
        }

        // Limite de la remise totale à 20 %
        $maxDiscount = $amount * 0.20;
        if ($discount > $maxDiscount) {
            $discount = $maxDiscount;
        }

        return $discount;
    }
}
