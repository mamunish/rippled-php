<?php declare(strict_types=1);

namespace Mamunish\Rippled\Api\TransactionType;

use Mamunish\Rippled\Api\Field;

/**
 * PaymentChannelFund Transaction Type Class
 *
 * Add additional XRP to an open payment channel, update the expiration time of the channel, or both. Only the source
 * address of the channel can use this transaction. (Transactions from other addresses fail with the error
 * tecNO_PERMISSION.)
 *
 * @link https://developers.ripple.com/paymentchannelfund.html PaymentChannelFund transaction type documentation.
 */
class PaymentChannelFund extends AbstractTransactionType
{
    /**
     * {@inheritDoc}
     *
     * @throws \Mamunish\Rippled\Exception\FieldException
     */
    public function setFields(): void
    {
        parent::setFields();

        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        $this->addField(new Field([
            'name' => 'Channel',
            'required' => true,
            'autoFillable' => false
        ]));

        $this->addField(new Field([
            'name' => 'Amount',
            'required' => true,
            'autoFillable' => false
        ]));

        $this->addField(new Field([
            'name' => 'Expiration',
            'required' => false,
            'autoFillable' => false
        ]));

        // END GENERATED
    }
}
