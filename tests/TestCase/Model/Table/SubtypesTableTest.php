<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubtypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubtypesTable Test Case
 */
class SubtypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubtypesTable
     */
    protected $Subtypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Subtypes',
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
        $config = $this->getTableLocator()->exists('Subtypes') ? [] : ['className' => SubtypesTable::class];
        $this->Subtypes = $this->getTableLocator()->get('Subtypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Subtypes);

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
