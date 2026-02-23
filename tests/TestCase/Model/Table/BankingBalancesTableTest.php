<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BankingBalancesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BankingBalancesTable Test Case
 */
class BankingBalancesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BankingBalancesTable
     */
    protected $BankingBalances;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BankingBalances',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BankingBalances') ? [] : ['className' => BankingBalancesTable::class];
        $this->BankingBalances = $this->getTableLocator()->get('BankingBalances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BankingBalances);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BankingBalancesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BankingBalancesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
