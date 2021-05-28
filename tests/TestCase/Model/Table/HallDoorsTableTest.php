<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HallDoorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HallDoorsTable Test Case
 */
class HallDoorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HallDoorsTable
     */
    protected $HallDoors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.HallDoors',
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
        $config = $this->getTableLocator()->exists('HallDoors') ? [] : ['className' => HallDoorsTable::class];
        $this->HallDoors = $this->getTableLocator()->get('HallDoors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->HallDoors);

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
