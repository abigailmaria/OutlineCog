<?php
/**
 * Tests for OutlineCog
 */

use PHPUnit\Framework\TestCase;
use Outlinecog\Outlinecog;

class OutlinecogTest extends TestCase {
    private Outlinecog $instance;

    protected function setUp(): void {
        $this->instance = new Outlinecog(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinecog::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
