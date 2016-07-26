<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OtheradditionalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OtheradditionalsTable Test Case
 */
class OtheradditionalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OtheradditionalsTable
     */
    public $Otheradditionals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.otheradditionals',
        'app.games',
        'app.additionals',
        'app.authors',
        'app.budgetprices',
        'app.controls',
        'app.downloads',
        'app.groups',
        'app.magazines',
        'app.originalprices',
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
        $config = TableRegistry::exists('Otheradditionals') ? [] : ['className' => 'App\Model\Table\OtheradditionalsTable'];
        $this->Otheradditionals = TableRegistry::get('Otheradditionals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Otheradditionals);

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
