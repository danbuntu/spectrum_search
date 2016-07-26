<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BudgetpricesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BudgetpricesTable Test Case
 */
class BudgetpricesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BudgetpricesTable
     */
    public $Budgetprices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.budgetprices',
        'app.games',
        'app.additionals',
        'app.authors',
        'app.controls',
        'app.downloads',
        'app.groups',
        'app.magazines',
        'app.originalprices',
        'app.otheradditionals',
        'app.publishers',
        'app.rereleasedbys',
        'app.scores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Budgetprices') ? [] : ['className' => 'App\Model\Table\BudgetpricesTable'];
        $this->Budgetprices = TableRegistry::get('Budgetprices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Budgetprices);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
