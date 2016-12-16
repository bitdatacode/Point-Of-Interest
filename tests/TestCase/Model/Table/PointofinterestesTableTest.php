<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PointofinterestesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PointofinterestesTable Test Case
 */
class PointofinterestesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PointofinterestesTable
     */
    public $Pointofinterestes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pointofinterestes',
        'app.users',
        'app.municipalites',
        'app.groups',
        'app.provinces',
        'app.regions',
        'app.countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pointofinterestes') ? [] : ['className' => 'App\Model\Table\PointofinterestesTable'];
        $this->Pointofinterestes = TableRegistry::get('Pointofinterestes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pointofinterestes);

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
