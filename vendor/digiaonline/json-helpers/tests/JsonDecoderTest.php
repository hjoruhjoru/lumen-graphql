<?php

namespace Digia\JsonHelpers\Tests;

use Digia\JsonHelpers\JsonDecoder;
use PHPUnit\Framework\TestCase;

/**
 * Class JsonDecoderTest
 * @package Digia\JsonHelpers\Tests
 * @covers  \Digia\JsonHelpers\JsonDecoder
 */
class JsonDecoderTest extends TestCase
{

    /**
     * Tests that decoding works as it is supposed to
     */
    public function testDecode()
    {
        $data = '{"foo": "bar"}';

        $this->assertEquals(['foo' => 'bar'], JsonDecoder::decode($data, true));
    }

    /**
     * Tests that exceptions are thrown on invalid JSON
     *
     * @expectedException \InvalidArgumentException
     */
    public function testDecodeWithInvalidJson()
    {
        $data = '{\"foo\":\"bar\"}';

        JsonDecoder::decode($data);
    }

}
