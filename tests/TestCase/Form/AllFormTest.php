<?php
namespace App\Test\TestCase\Form;

use App\Form\AllForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\AllForm Test Case
 */
class AllFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\AllForm
     */
    public $All;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->All = new AllForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->All);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
