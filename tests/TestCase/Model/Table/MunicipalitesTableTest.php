<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MunicipalitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MunicipalitesTable Test Case
 */
class MunicipalitesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MunicipalitesTable
     */
    public $Municipalites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Municipalites') ? [] : ['className' => 'App\Model\Table\MunicipalitesTable'];
        $this->Municipalites = TableRegistry::get('Municipalites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Municipalites);

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
