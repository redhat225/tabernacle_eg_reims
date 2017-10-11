<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabernacleJoinSubscribersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabernacleJoinSubscribersTable Test Case
 */
class TabernacleJoinSubscribersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabernacleJoinSubscribersTable
     */
    public $TabernacleJoinSubscribers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabernacle_join_subscribers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TabernacleJoinSubscribers') ? [] : ['className' => TabernacleJoinSubscribersTable::class];
        $this->TabernacleJoinSubscribers = TableRegistry::get('TabernacleJoinSubscribers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TabernacleJoinSubscribers);

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
