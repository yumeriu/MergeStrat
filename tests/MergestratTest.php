<?php
/**
 * Tests for MergeStrat
 */

use PHPUnit\Framework\TestCase;
use Mergestrat\Mergestrat;

class MergestratTest extends TestCase {
    private Mergestrat $instance;

    protected function setUp(): void {
        $this->instance = new Mergestrat(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mergestrat::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
