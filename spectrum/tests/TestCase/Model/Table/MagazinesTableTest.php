<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MagazinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MagazinesTable Test Case
 */
class MagazinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MagazinesTable
     */
    public $Magazines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.magazines',
        'app.games',
        'app.additionals',
        'app.authors',
        'app.budgetprices',
        'app.controls',
        'app.downloads',
        'app.groups',
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
        $config = TableRegistry::exists('Magazines') ? [] : ['className' => 'App\Model\Table\MagazinesTable'];
        $this->Magazines = TableRegistry::get('Magazines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Magazines);

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
