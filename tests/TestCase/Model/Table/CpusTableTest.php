<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CpusTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CpusTable Test Case
 */
class CpusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CpusTable
     */
    protected $Cpus;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cpus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cpus') ? [] : ['className' => CpusTable::class];
        $this->Cpus = $this->getTableLocator()->get('Cpus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cpus);

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
