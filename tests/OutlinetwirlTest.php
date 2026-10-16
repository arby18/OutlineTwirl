<?php
/**
 * Tests for OutlineTwirl
 */

use PHPUnit\Framework\TestCase;
use Outlinetwirl\Outlinetwirl;

class OutlinetwirlTest extends TestCase {
    private Outlinetwirl $instance;

    protected function setUp(): void {
        $this->instance = new Outlinetwirl(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinetwirl::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
