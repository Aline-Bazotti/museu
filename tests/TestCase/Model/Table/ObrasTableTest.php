<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObrasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObrasTable Test Case
 */
class ObrasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ObrasTable
     */
    protected $Obras;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Obras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Obras') ? [] : ['className' => ObrasTable::class];
        $this->Obras = $this->getTableLocator()->get('Obras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Obras);

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
