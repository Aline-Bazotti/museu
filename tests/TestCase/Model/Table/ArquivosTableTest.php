<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArquivosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArquivosTable Test Case
 */
class ArquivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArquivosTable
     */
    protected $Arquivos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Arquivos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Arquivos') ? [] : ['className' => ArquivosTable::class];
        $this->Arquivos = $this->getTableLocator()->get('Arquivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Arquivos);

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
