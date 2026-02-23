<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BankingBalancesFixture
 */
class BankingBalancesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'iban' => 'Lorem ipsum dolor sit amet',
                'art' => 'Lorem ipsum dolor sit amet',
                'bezeichnung' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'typ' => 'Lorem ipsum dolor sit amet',
                'saldo' => 1.5,
                'created' => '2026-02-23 17:15:16',
                'modified' => '2026-02-23 17:15:16',
            ],
        ];
        parent::init();
    }
}
