<?php

namespace Digia\JsonHelpers;

/**
 * Class JsonDecoder
 * @package Digia\JsonHelpers
 */
class JsonDecoder
{

    /**
     * Decodes the specified JSON into an object
     *
     * @param string $data
     *
     * @param bool   $assoc
     * @param int    $depth
     * @param int    $options
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public static function decode(string $data, bool $assoc = false, int $depth = 512, int $options = 0)
    {
        $json          = json_decode($data, $assoc, $depth, $options);
        $jsonLastError = json_last_error();

        if ($jsonLastError !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Failed to decode JSON: ' . json_last_error_msg(), $jsonLastError);
        }

        return $json;
    }
}
