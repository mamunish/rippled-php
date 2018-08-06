<?php declare(strict_types=1);

namespace Mamunish\Rippled\Api\Method;

use Mamunish\Rippled\Api\Field;

/**
 * Fee Method Class
 *
 * The fee command reports the current state of the open-ledger requirements for the transaction cost. This requires the
 * FeeEscalation amendment to be enabled.
 *
 * @link https://developers.ripple.com/fee.html Fee method documentation.
 */
class Fee extends AbstractMethod
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
        // END GENERATED
    }
}
