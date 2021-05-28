<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PumpsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PumpsTable Test Case
 */
class PumpsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PumpsTable
     */
    protected $Pumps;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pumps',
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
        $config = $this->getTableLocator()->exists('Pumps') ? [] : ['className' => PumpsTable::class];
        $this->Pumps = $this->getTableLocator()->get('Pumps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pumps);

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
