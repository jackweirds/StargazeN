<?php
/**
 * Tests for StargazeNFT
 */

use PHPUnit\Framework\TestCase;
use Stargazenft\Stargazenft;

class StargazenftTest extends TestCase {
    private Stargazenft $instance;

    protected function setUp(): void {
        $this->instance = new Stargazenft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Stargazenft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
