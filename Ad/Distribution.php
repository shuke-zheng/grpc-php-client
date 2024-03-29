<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use UnexpectedValueException;

/**
 * Protobuf type <code>ad.Distribution</code>
 */
class Distribution
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_DISTRIBUTION = 0;</code>
     */
    const UNKNOWN_DISTRIBUTION = 0;
    /**
     * Generated from protobuf enum <code>EVEN = 1;</code>
     */
    const EVEN = 1;
    /**
     * Generated from protobuf enum <code>UNEVEN = 2;</code>
     */
    const UNEVEN = 2;

    private static $valueToName = [
        self::UNKNOWN_DISTRIBUTION => 'UNKNOWN_DISTRIBUTION',
        self::EVEN => 'EVEN',
        self::UNEVEN => 'UNEVEN',
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

