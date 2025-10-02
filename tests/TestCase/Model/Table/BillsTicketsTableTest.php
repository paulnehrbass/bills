<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsTicketsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsTicketsTable Test Case
 */
class BillsTicketsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsTicketsTable
     */
    protected $BillsTickets;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.BillsTickets',
        'app.BillsStates',
        'app.BillsBranches',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BillsTickets') ? [] : ['className' => BillsTicketsTable::class];
        $this->BillsTickets = $this->getTableLocator()->get('BillsTickets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BillsTickets);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\BillsTicketsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\BillsTicketsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
