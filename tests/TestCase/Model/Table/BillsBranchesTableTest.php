<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsBranchesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsBranchesTable Test Case
 */
class BillsBranchesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsBranchesTable
     */
    protected $BillsBranches;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
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
        $config = $this->getTableLocator()->exists('BillsBranches') ? [] : ['className' => BillsBranchesTable::class];
        $this->BillsBranches = $this->getTableLocator()->get('BillsBranches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BillsBranches);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\BillsBranchesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\BillsBranchesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
