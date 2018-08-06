<?php declare(strict_types=1);

namespace Gegosoft\Rippled\Api\TransactionType;

use Gegosoft\Rippled\Api\Field;

/**
 * This class is used by the generator as a template for new transaction types.
 */
class Skeleton extends AbstractTransactionType
{
    /**
     * {@inheritDoc}
     *
     * @throws \Gegosoft\Rippled\Exception\FieldException
     */
    public function setFields(): void
    {
        parent::setFields();

        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        // ***************
        // END GENERATED
    }
}
