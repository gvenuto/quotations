<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThermalProtectorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThermalProtectorsTable Test Case
 */
class ThermalProtectorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ThermalProtectorsTable
     */
    protected $ThermalProtectors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ThermalProtectors',
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
        $config = $this->getTableLocator()->exists('ThermalProtectors') ? [] : ['className' => ThermalProtectorsTable::class];
        $this->ThermalProtectors = $this->getTableLocator()->get('ThermalProtectors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ThermalProtectors);

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
