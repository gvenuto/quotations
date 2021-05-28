<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BatterysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BatterysTable Test Case
 */
class BatterysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BatterysTable
     */
    protected $Batterys;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Batterys',
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
        $config = $this->getTableLocator()->exists('Batterys') ? [] : ['className' => BatterysTable::class];
        $this->Batterys = $this->getTableLocator()->get('Batterys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Batterys);

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
