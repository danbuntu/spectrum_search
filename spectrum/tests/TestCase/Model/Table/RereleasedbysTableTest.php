<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RereleasedbysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RereleasedbysTable Test Case
 */
class RereleasedbysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RereleasedbysTable
     */
    public $Rereleasedbys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rereleasedbys',
        'app.games',
        'app.additionals',
        'app.authors',
        'app.budgetprices',
        'app.controls',
        'app.downloads',
        'app.groups',
        'app.magazines',
        'app.originalprices',
        'app.otheradditionals',
        'app.publishers',
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
        $config = TableRegistry::exists('Rereleasedbys') ? [] : ['className' => 'App\Model\Table\RereleasedbysTable'];
        $this->Rereleasedbys = TableRegistry::get('Rereleasedbys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rereleasedbys);

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
