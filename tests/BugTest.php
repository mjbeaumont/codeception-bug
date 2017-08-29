<?php
namespace Test;

use Codeception\Specify;

class BugTest extends \Codeception\Test\Unit
{
    use Specify;
    /**
     * @var \Test\
     */
    protected $tester;

    // tests
    public function testFailingTestMarksAsPassed()
    {
        $this->specify('PHPStorm will mark this failing test as passing', function() {
           $this->assertTrue(false);
        });
    }

    public function testFailingTestMarksAsFailed()
    {
        $this->assertTrue(true);
    }
}