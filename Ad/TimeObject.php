<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ad.TimeObject</code>
 */
class TimeObject extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string date = 1;</code>
     */
    private $date = '';
    /**
     * Generated from protobuf field <code>repeated .ad.TimeObject.Time time = 2;</code>
     */
    private $time;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $date
     *     @type \Ad\TimeObject\Time[]|\Google\Protobuf\Internal\RepeatedField $time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RawAd::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string date = 1;</code>
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Generated from protobuf field <code>string date = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ad.TimeObject.Time time = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Generated from protobuf field <code>repeated .ad.TimeObject.Time time = 2;</code>
     * @param \Ad\TimeObject\Time[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTime($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ad\TimeObject\Time::class);
        $this->time = $arr;

        return $this;
    }

}

