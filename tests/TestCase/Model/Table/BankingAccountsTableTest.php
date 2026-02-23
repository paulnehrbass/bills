<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BankingAccountsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BankingAccountsTable Test Case
 */
class BankingAccountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BankingAccountsTable
     */
    protected $BankingAccounts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BankingAccounts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BankingAccounts') ? [] : ['className' => BankingAccountsTable::class];
        $this->BankingAccounts = $this->getTableLocator()->get('BankingAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BankingAccounts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BankingAccountsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BankingAccountsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
