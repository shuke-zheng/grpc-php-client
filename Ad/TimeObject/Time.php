<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad\TimeObject;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ad.TimeObject.Time</code>
 */
class Time extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 start = 1;</code>
     */
    private $start = 0;
    /**
     * Generated from protobuf field <code>int32 end = 2;</code>
     */
    private $end = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $start
     *     @type int $end
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RawAd::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 start = 1;</code>
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>int32 start = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt32($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 end = 2;</code>
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>int32 end = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt32($var);
        $this->end = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Time::class, \Ad\TimeObject_Time::class);
