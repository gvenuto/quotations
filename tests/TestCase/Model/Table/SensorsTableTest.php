<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SensorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SensorsTable Test Case
 */
class SensorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SensorsTable
     */
    protected $Sensors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Sensors',
        'app.QuotControllers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sensors') ? [] : ['className' => SensorsTable::class];
        $this->Sensors = $this->getTableLocator()->get('Sensors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Sensors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
