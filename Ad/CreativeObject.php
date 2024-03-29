<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rawAd.proto

namespace Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ad.CreativeObject</code>
 */
class CreativeObject extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string creative_id = 1;</code>
     */
    private $creative_id = '';
    /**
     * Generated from protobuf field <code>string creative_name = 2;</code>
     */
    private $creative_name = '';
    /**
     * Generated from protobuf field <code>string ad_url = 3;</code>
     */
    private $ad_url = '';
    /**
     * Generated from protobuf field <code>string landing_page_pic = 4;</code>
     */
    private $landing_page_pic = '';
    /**
     * Generated from protobuf field <code>int32 monitor_type = 5;</code>
     */
    private $monitor_type = 0;
    /**
     * Generated from protobuf field <code>string monitor_urls = 6;</code>
     */
    private $monitor_urls = '';
    /**
     * Generated from protobuf field <code>string monitor_pv_urls = 7;</code>
     */
    private $monitor_pv_urls = '';
    /**
     * Generated from protobuf field <code>string title = 8;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>string spread_name = 9;</code>
     */
    private $spread_name = '';
    /**
     * Generated from protobuf field <code>string content = 10;</code>
     */
    private $content = '';
    /**
     * Generated from protobuf field <code>string apk_name = 11;</code>
     */
    private $apk_name = '';
    /**
     * Generated from protobuf field <code>.ad.CreateType create_type = 12;</code>
     */
    private $create_type = 0;
    /**
     * Generated from protobuf field <code>map<string, string> annotations = 13;</code>
     */
    private $annotations;
    /**
     * Generated from protobuf field <code>repeated .ad.CreativeObject.Materials materials = 14;</code>
     */
    private $materials;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creative_id
     *     @type string $creative_name
     *     @type string $ad_url
     *     @type string $landing_page_pic
     *     @type int $monitor_type
     *     @type string $monitor_urls
     *     @type string $monitor_pv_urls
     *     @type string $title
     *     @type string $spread_name
     *     @type string $content
     *     @type string $apk_name
     *     @type int $create_type
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *     @type \Ad\CreativeObject\Materials[]|\Google\Protobuf\Internal\RepeatedField $materials
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RawAd::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string creative_id = 1;</code>
     * @return string
     */
    public function getCreativeId()
    {
        return $this->creative_id;
    }

    /**
     * Generated from protobuf field <code>string creative_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCreativeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->creative_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string creative_name = 2;</code>
     * @return string
     */
    public function getCreativeName()
    {
        return $this->creative_name;
    }

    /**
     * Generated from protobuf field <code>string creative_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCreativeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->creative_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ad_url = 3;</code>
     * @return string
     */
    public function getAdUrl()
    {
        return $this->ad_url;
    }

    /**
     * Generated from protobuf field <code>string ad_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAdUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string landing_page_pic = 4;</code>
     * @return string
     */
    public function getLandingPagePic()
    {
        return $this->landing_page_pic;
    }

    /**
     * Generated from protobuf field <code>string landing_page_pic = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLandingPagePic($var)
    {
        GPBUtil::checkString($var, True);
        $this->landing_page_pic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 monitor_type = 5;</code>
     * @return int
     */
    public function getMonitorType()
    {
        return $this->monitor_type;
    }

    /**
     * Generated from protobuf field <code>int32 monitor_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMonitorType($var)
    {
        GPBUtil::checkInt32($var);
        $this->monitor_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string monitor_urls = 6;</code>
     * @return string
     */
    public function getMonitorUrls()
    {
        return $this->monitor_urls;
    }

    /**
     * Generated from protobuf field <code>string monitor_urls = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMonitorUrls($var)
    {
        GPBUtil::checkString($var, True);
        $this->monitor_urls = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string monitor_pv_urls = 7;</code>
     * @return string
     */
    public function getMonitorPvUrls()
    {
        return $this->monitor_pv_urls;
    }

    /**
     * Generated from protobuf field <code>string monitor_pv_urls = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMonitorPvUrls($var)
    {
        GPBUtil::checkString($var, True);
        $this->monitor_pv_urls = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 8;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string spread_name = 9;</code>
     * @return string
     */
    public function getSpreadName()
    {
        return $this->spread_name;
    }

    /**
     * Generated from protobuf field <code>string spread_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSpreadName($var)
    {
        GPBUtil::checkString($var, True);
        $this->spread_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string content = 10;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>string content = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string apk_name = 11;</code>
     * @return string
     */
    public function getApkName()
    {
        return $this->apk_name;
    }

    /**
     * Generated from protobuf field <code>string apk_name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setApkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->apk_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ad.CreateType create_type = 12;</code>
     * @return int
     */
    public function getCreateType()
    {
        return $this->create_type;
    }

    /**
     * Generated from protobuf field <code>.ad.CreateType create_type = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCreateType($var)
    {
        GPBUtil::checkEnum($var, \Ad\CreateType::class);
        $this->create_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> annotations = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Generated from protobuf field <code>map<string, string> annotations = 13;</code>
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
     * Generated from protobuf field <code>repeated .ad.CreativeObject.Materials materials = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Generated from protobuf field <code>repeated .ad.CreativeObject.Materials materials = 14;</code>
     * @param \Ad\CreativeObject\Materials[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMaterials($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ad\CreativeObject\Materials::class);
        $this->materials = $arr;

        return $this;
    }

}

