<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CabinDoorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CabinDoorsTable Test Case
 */
class CabinDoorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CabinDoorsTable
     */
    protected $CabinDoors;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CabinDoors',
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
        $config = $this->getTableLocator()->exists('CabinDoors') ? [] : ['className' => CabinDoorsTable::class];
        $this->CabinDoors = $this->getTableLocator()->get('CabinDoors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CabinDoors);

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
