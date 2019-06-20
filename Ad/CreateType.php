<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use UnexpectedValueException;

/**
 * Protobuf type <code>ad.CreateType</code>
 */
class CreateType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_CREATETYPE = 0;</code>
     */
    const UNKNOWN_CREATETYPE = 0;
    /**
     * Generated from protobuf enum <code>IMAGE = 1;</code>
     */
    const IMAGE = 1;
    /**
     * Generated from protobuf enum <code>VIDEO = 2;</code>
     */
    const VIDEO = 2;

    private static $valueToName = [
        self::UNKNOWN_CREATETYPE => 'UNKNOWN_CREATETYPE',
        self::IMAGE => 'IMAGE',
        self::VIDEO => 'VIDEO',
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

