<?php

namespace App\Contracts;

/**
 * Interface PricingMatrixInterface
 * 
 * Defines the contract for dynamic, customer-tier B2B wholesale calculations.
 */
interface PricingMatrixInterface
{
    /**
     * Calculates unit and bulk lot prices according to buyer tier and volume breaks.
     *
     * @param string $sku
     * @param string $buyerTierId (e.g., 'TIER_PLATINUM', 'TIER_GOLD', 'TIER_WHOLESALE')
     * @param int $orderQuantity
     * @return array{unit_price: float, total_discount_percentage: float, final_lot_total: float}
     */
    public function calculateWholesaleTier(
        string $sku,
        string $buyerTierId,
        int $orderQuantity
    ): array;

    /**
     * Validates corporate buyer credit limits against live open ledger balances.
     *
     * @param string $accountId
     * @param float $requestedOrderTotal
     * @return bool
     */
    public function verifyCreditLimit(string $accountId, float $requestedOrderTotal): bool;
}
