<?php declare(strict_types=1);

namespace Gegosoft\Rippled\Api\Method;

use Gegosoft\Rippled\Api\Field;

/**
 * Tx Method Class
 *
 * The tx method retrieves information on a single transaction.
 *
 * @link https://developers.ripple.com/tx.html Tx method documentation.
 */
class Tx extends AbstractMethod
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
        $this->addField(new Field([
            'name' => 'transaction',
            'required' => true
        ]));

        $this->addField(new Field([
            'name' => 'binary',
            'required' => false
        ]));

        // END GENERATED
    }
}
