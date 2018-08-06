<?php declare(strict_types=1);

namespace Mamunish\Rippled\Api\Method;

use Mamunish\Rippled\Api\Field;
use Mamunish\Rippled\Exception\InvalidParameterException;

/**
 * Submit Method Class
 *
 * The submit method applies a transaction and sends it to the network to be confirmed and included in future ledgers.
 *
 * @link https://developers.ripple.com/submit.html Submit method documentation.
 */
class Submit extends AbstractMethod
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
            'name' => 'tx_blob',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'tx_json',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'secret',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'passphrase',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'seed',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'seed_hex',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'key_type',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'fail_hard',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'offline',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'build_path',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'fee_mult_max',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'fee_div_max',
            'required' => false
        ]));

        // END GENERATED
    }

    /**
     * @param array|null $params
     * @throws InvalidParameterException
     */
    public function validateParameters(array $params = null): void
    {
        if (!isset($params['tx_json']) && !isset($params['tx_blob'])) {
            throw new InvalidParameterException('Missing parameter: tx_blob or tx_json');
        }

        // When using sign-and-submit mode, validate signing params.
        if (isset($params['tx_json'])) {
            $this->validateSignParameters($params);
        }
    }
}
