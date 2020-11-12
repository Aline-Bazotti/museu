<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExibicoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExibicoesTable Test Case
 */
class ExibicoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExibicoesTable
     */
    protected $Exibicoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Exibicoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Exibicoes') ? [] : ['className' => ExibicoesTable::class];
        $this->Exibicoes = $this->getTableLocator()->get('Exibicoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Exibicoes);

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
