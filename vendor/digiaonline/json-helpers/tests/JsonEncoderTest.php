<?php

namespace Digia\JsonHelpers\Tests;

use Digia\JsonHelpers\JsonEncoder;
use PHPUnit\Framework\TestCase;

/**
 * Class JsonEncoderTest
 * @package Digia\JsonHelpers\Tests
 * @covers  \Digia\JsonHelpers\JsonEncoder
 */
class JsonEncoderTest extends TestCase
{

    /**
     * Tests that characters are properly filtered out
     */
    public function testHandle()
    {
        $data = 'This is a string with characters';

        $this->assertEquals('"This is a string with characters"', JsonEncoder::encode($data));
    }

    /**
     * Tests that exceptions are thrown on invalid JSON
     *
     * @expectedException \InvalidArgumentException
     * @expectedExceptionCode JSON_ERROR_UTF8
     */
    public function testErrorHandling()
    {
        // An invalid UTF-8 sequence
        $data = "\xB1\x31";

        JsonEncoder::encode($data);
    }

}
