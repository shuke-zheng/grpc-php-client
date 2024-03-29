<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use UnexpectedValueException;

/**
 * Protobuf type <code>ad.Carousel</code>
 */
class Carousel
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_CAROUSEL = 0;</code>
     */
    const UNKNOWN_CAROUSEL = 0;
    /**
     * Generated from protobuf enum <code>QUARTER = 1;</code>
     */
    const QUARTER = 1;
    /**
     * Generated from protobuf enum <code>HALF = 2;</code>
     */
    const HALF = 2;
    /**
     * Generated from protobuf enum <code>THREEQUATERS = 3;</code>
     */
    const THREEQUATERS = 3;
    /**
     * Generated from protobuf enum <code>FULL = 4;</code>
     */
    const FULL = 4;

    private static $valueToName = [
        self::UNKNOWN_CAROUSEL => 'UNKNOWN_CAROUSEL',
        self::QUARTER => 'QUARTER',
        self::HALF => 'HALF',
        self::THREEQUATERS => 'THREEQUATERS',
        self::FULL => 'FULL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

