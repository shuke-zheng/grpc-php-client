<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use UnexpectedValueException;

/**
 * Protobuf type <code>ad.PlatformType</code>
 */
class PlatformType
{
    /**
     * Generated from protobuf enum <code>ADMIN = 0;</code>
     */
    const ADMIN = 0;
    /**
     * Generated from protobuf enum <code>AGENT = 1;</code>
     */
    const AGENT = 1;
    /**
     * Generated from protobuf enum <code>KA = 2;</code>
     */
    const KA = 2;
    /**
     * Generated from protobuf enum <code>ADVERTISER = 3;</code>
     */
    const ADVERTISER = 3;

    private static $valueToName = [
        self::ADMIN => 'ADMIN',
        self::AGENT => 'AGENT',
        self::KA => 'KA',
        self::ADVERTISER => 'ADVERTISER',
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

