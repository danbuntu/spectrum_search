<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdditionalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdditionalsTable Test Case
 */
class AdditionalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdditionalsTable
     */
    public $Additionals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.additionals',
        'app.games',
        'app.authors',
        'app.budgetprices',
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
        $config = TableRegistry::exists('Additionals') ? [] : ['className' => 'App\Model\Table\AdditionalsTable'];
        $this->Additionals = TableRegistry::get('Additionals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Additionals);

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
