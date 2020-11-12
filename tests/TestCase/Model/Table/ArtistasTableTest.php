<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtistasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtistasTable Test Case
 */
class ArtistasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtistasTable
     */
    protected $Artistas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Artistas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Artistas') ? [] : ['className' => ArtistasTable::class];
        $this->Artistas = $this->getTableLocator()->get('Artistas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Artistas);

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
