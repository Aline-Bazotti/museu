<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitantesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitantesTable Test Case
 */
class VisitantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitantesTable
     */
    protected $Visitantes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Visitantes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Visitantes') ? [] : ['className' => VisitantesTable::class];
        $this->Visitantes = $this->getTableLocator()->get('Visitantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Visitantes);

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
