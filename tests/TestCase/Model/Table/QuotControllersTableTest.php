<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuotControllersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuotControllersTable Test Case
 */
class QuotControllersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuotControllersTable
     */
    protected $QuotControllers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.QuotControllers',
        'app.Quots',
        'app.Cpus',
        'app.Maneuvers',
        'app.ControlTypes',
        'app.Subtypes',
        'app.Tensions',
        'app.Batteries',
        'app.Pumps',
        'app.ThermalProtectors',
        'app.Sensors',
        'app.CabinDoors',
        'app.HallDoors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('QuotControllers') ? [] : ['className' => QuotControllersTable::class];
        $this->QuotControllers = $this->getTableLocator()->get('QuotControllers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->QuotControllers);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
