<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControlTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControlTypesTable Test Case
 */
class ControlTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ControlTypesTable
     */
    protected $ControlTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ControlTypes',
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
        $config = $this->getTableLocator()->exists('ControlTypes') ? [] : ['className' => ControlTypesTable::class];
        $this->ControlTypes = $this->getTableLocator()->get('ControlTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ControlTypes);

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
