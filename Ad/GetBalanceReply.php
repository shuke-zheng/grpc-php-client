<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ad.GetBalanceReply</code>
 */
class GetBalanceReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 balance = 1;</code>
     */
    private $balance = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $balance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RawAd::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 balance = 1;</code>
     * @return int|string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Generated from protobuf field <code>int64 balance = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->balance = $var;

        return $this;
    }

}
