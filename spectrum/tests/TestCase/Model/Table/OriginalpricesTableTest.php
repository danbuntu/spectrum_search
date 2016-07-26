<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OriginalpricesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OriginalpricesTable Test Case
 */
class OriginalpricesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OriginalpricesTable
     */
    public $Originalprices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.originalprices',
        'app.games',
        'app.additionals',
        'app.authors',
        'app.budgetprices',
        'app.controls',
        'app.downloads',
        'app.groups',
        'app.magazines',
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
        $config = TableRegistry::exists('Originalprices') ? [] : ['className' => 'App\Model\Table\OriginalpricesTable'];
        $this->Originalprices = TableRegistry::get('Originalprices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Originalprices);

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
