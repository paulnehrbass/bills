<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsStatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsStatesTable Test Case
 */
class BillsStatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsStatesTable
     */
    protected $BillsStates;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.BillsStates',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BillsStates') ? [] : ['className' => BillsStatesTable::class];
        $this->BillsStates = $this->getTableLocator()->get('BillsStates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BillsStates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\BillsStatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\BillsStatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
