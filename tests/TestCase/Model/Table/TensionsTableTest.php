<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TensionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TensionsTable Test Case
 */
class TensionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TensionsTable
     */
    protected $Tensions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tensions',
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
        $config = $this->getTableLocator()->exists('Tensions') ? [] : ['className' => TensionsTable::class];
        $this->Tensions = $this->getTableLocator()->get('Tensions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tensions);

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
