<?php

namespace Spatie\SchemaOrg;

/**
 * A type of financial product that typically requires the client to transfer
 * funds to a financial service in return for potential beneficial financial
 * return.
 *
 * @see http://schema.org/InvestmentOrDeposit
 */
class InvestmentOrDeposit extends FinancialProduct
{
    /**
     * The amount of money.
     *
     * @param MonetaryAmount|MonetaryAmount[]|float|int|float|int[] $amount
     *
     * @return static
     *
     * @see http://schema.org/amount
     */
    public function amount($amount)
    {
        return $this->setProperty('amount', $amount);
    }

}
