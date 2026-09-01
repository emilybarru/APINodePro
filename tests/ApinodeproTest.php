<?php
/**
 * Tests for APINodePro
 */

use PHPUnit\Framework\TestCase;
use Apinodepro\Apinodepro;

class ApinodeproTest extends TestCase {
    private Apinodepro $instance;

    protected function setUp(): void {
        $this->instance = new Apinodepro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apinodepro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
