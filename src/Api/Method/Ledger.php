<?php declare(strict_types=1);

namespace Mamunish\Rippled\Api\Method;

use Mamunish\Rippled\Api\Field;

/**
 * Ledger Method Class
 *
 * Retrieve information about the public ledger.
 *
 * @link https://developers.ripple.com/ledger.html Ledger method documentation.
 */
class Ledger extends AbstractMethod
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
            'name' => 'ledger_hash',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'ledger_index',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'full',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'accounts',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'transactions',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'expand',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'owner_funds',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'binary',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'queue',
            'required' => false
        ]));

        // END GENERATED
    }
}
