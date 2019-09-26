<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use UnexpectedValueException;

/**
 * Protobuf type <code>ad.Media</code>
 */
class Media
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_MEDIA = 0;</code>
     */
    const UNKNOWN_MEDIA = 0;
    /**
     * Generated from protobuf enum <code>MEDIA_YINLI = 1;</code>
     */
    const MEDIA_YINLI = 1;
    /**
     * Generated from protobuf enum <code>MEDIA_NGA = 2;</code>
     */
    const MEDIA_NGA = 2;
    /**
     * Generated from protobuf enum <code>MEDIA_A9VG = 3;</code>
     */
    const MEDIA_A9VG = 3;
    /**
     * Generated from protobuf enum <code>MEDIA_178 = 4;</code>
     */
    const MEDIA_178 = 4;
    /**
     * Generated from protobuf enum <code>MEDIA_TGBUS = 5;</code>
     */
    const MEDIA_TGBUS = 5;
    /**
     * Generated from protobuf enum <code>MEDIA_RENREN = 6;</code>
     */
    const MEDIA_RENREN = 6;
    /**
     * Generated from protobuf enum <code>MEDIA_RENRENLIVE = 7;</code>
     */
    const MEDIA_RENRENLIVE = 7;
    /**
     * Generated from protobuf enum <code>MEDIA_DONEWS = 8;</code>
     */
    const MEDIA_DONEWS = 8;
    /**
     * Generated from protobuf enum <code>MEDIA_PTBUS = 9;</code>
     */
    const MEDIA_PTBUS = 9;
    /**
     * Generated from protobuf enum <code>MEDIA_BIGFOOT = 10;</code>
     */
    const MEDIA_BIGFOOT = 10;
    /**
     * Generated from protobuf enum <code>MEDIA_INVENO = 11;</code>
     */
    const MEDIA_INVENO = 11;

    private static $valueToName = [
        self::UNKNOWN_MEDIA => 'UNKNOWN_MEDIA',
        self::MEDIA_YINLI => 'MEDIA_YINLI',
        self::MEDIA_NGA => 'MEDIA_NGA',
        self::MEDIA_A9VG => 'MEDIA_A9VG',
        self::MEDIA_178 => 'MEDIA_178',
        self::MEDIA_TGBUS => 'MEDIA_TGBUS',
        self::MEDIA_RENREN => 'MEDIA_RENREN',
        self::MEDIA_RENRENLIVE => 'MEDIA_RENRENLIVE',
        self::MEDIA_DONEWS => 'MEDIA_DONEWS',
        self::MEDIA_PTBUS => 'MEDIA_PTBUS',
        self::MEDIA_BIGFOOT => 'MEDIA_BIGFOOT',
        self::MEDIA_INVENO => 'MEDIA_INVENO',
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

