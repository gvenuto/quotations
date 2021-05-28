<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuotsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuotsTable Test Case
 */
class QuotsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuotsTable
     */
    protected $Quots;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Quots',
        'app.Clients',
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
        $config = $this->getTableLocator()->exists('Quots') ? [] : ['className' => QuotsTable::class];
        $this->Quots = $this->getTableLocator()->get('Quots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Quots);

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
