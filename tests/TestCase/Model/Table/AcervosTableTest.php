<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcervosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcervosTable Test Case
 */
class AcervosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AcervosTable
     */
    protected $Acervos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Acervos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Acervos') ? [] : ['className' => AcervosTable::class];
        $this->Acervos = $this->getTableLocator()->get('Acervos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Acervos);

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
