<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabernacleTrainingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabernacleTrainingsTable Test Case
 */
class TabernacleTrainingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabernacleTrainingsTable
     */
    public $TabernacleTrainings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabernacle_trainings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TabernacleTrainings') ? [] : ['className' => TabernacleTrainingsTable::class];
        $this->TabernacleTrainings = TableRegistry::get('TabernacleTrainings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TabernacleTrainings);

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
