<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManeuversTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManeuversTable Test Case
 */
class ManeuversTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ManeuversTable
     */
    protected $Maneuvers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Maneuvers',
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
        $config = $this->getTableLocator()->exists('Maneuvers') ? [] : ['className' => ManeuversTable::class];
        $this->Maneuvers = $this->getTableLocator()->get('Maneuvers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Maneuvers);

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
