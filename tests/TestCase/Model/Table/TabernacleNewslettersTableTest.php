<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabernacleNewslettersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabernacleNewslettersTable Test Case
 */
class TabernacleNewslettersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabernacleNewslettersTable
     */
    public $TabernacleNewsletters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabernacle_newsletters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TabernacleNewsletters') ? [] : ['className' => TabernacleNewslettersTable::class];
        $this->TabernacleNewsletters = TableRegistry::get('TabernacleNewsletters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TabernacleNewsletters);

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
}
