<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabernacleEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabernacleEventsTable Test Case
 */
class TabernacleEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabernacleEventsTable
     */
    public $TabernacleEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabernacle_events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TabernacleEvents') ? [] : ['className' => TabernacleEventsTable::class];
        $this->TabernacleEvents = TableRegistry::get('TabernacleEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TabernacleEvents);

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
