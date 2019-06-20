<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad\GlobalAdObject;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ad.GlobalAdObject.PotentialPlace</code>
 */
class PotentialPlace extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>float cpm_bid_floor = 2;</code>
     */
    private $cpm_bid_floor = 0.0;
    /**
     * Generated from protobuf field <code>map<string, string> annotations = 3;</code>
     */
    private $annotations;
    /**
     * Generated from protobuf field <code>int32 width = 4;</code>
     */
    private $width = 0;
    /**
     * Generated from protobuf field <code>int32 height = 5;</code>
     */
    private $height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type float $cpm_bid_floor
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *     @type int $width
     *     @type int $height
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RawAd::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float cpm_bid_floor = 2;</code>
     * @return float
     */
    public function getCpmBidFloor()
    {
        return $this->cpm_bid_floor;
    }

    /**
     * Generated from protobuf field <code>float cpm_bid_floor = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setCpmBidFloor($var)
    {
        GPBUtil::checkFloat($var);
        $this->cpm_bid_floor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> annotations = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Generated from protobuf field <code>map<string, string> annotations = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 width = 4;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Generated from protobuf field <code>int32 width = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 height = 5;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int32 height = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PotentialPlace::class, \Ad\GlobalAdObject_PotentialPlace::class);
