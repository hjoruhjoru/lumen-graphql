<?php

namespace Digia\JsonHelpers;

/**
 * Class JsonEncoder
 * @package Digia\JsonHelpers
 */
class JsonEncoder
{

    /**
     * Encodes the specified data as JSON. In contrast to just using json_encode(), this method throws an exception if
     * encoding fails.
     *
     * @param mixed $data the data to encode
     * @param int   $options
     * @param int   $depth
     *
     * @return string the encoded JSON
     *
     * @throws \InvalidArgumentException
     */
    public static function encode($data, int $options = 0, int $depth = 512): string
    {
        $json          = json_encode($data, $options, $depth);
        $jsonLastError = json_last_error();

        if ($jsonLastError !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Failed to encode JSON: ' . json_last_error_msg(), $jsonLastError);
        }

        return $json;
    }

}
