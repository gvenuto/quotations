<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BatteriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BatteriesTable Test Case
 */
class BatteriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BatteriesTable
     */
    protected $Batteries;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Batteries',
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
        $config = $this->getTableLocator()->exists('Batteries') ? [] : ['className' => BatteriesTable::class];
        $this->Batteries = $this->getTableLocator()->get('Batteries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Batteries);

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
