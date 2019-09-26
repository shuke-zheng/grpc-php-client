<?php
/**
 * Created by PhpStorm.
 * User: 多牛_xiaojun
 * Date: 2019/6/18
 * Time: 18:40
 */
header("content-type;text/html;charset=gb2312");

include "vendor/autoload.php";
require_once 'RawAdClient.php';
use Ad\AdObject;

$client = new \Ad\RawAdClient("127.0.0.1:9001", [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);

echo '-------广告信息' . PHP_EOL;
echo "<br>";

$request = new \Ad\Request();

$response = $client->GlobalQuery($request)->wait();

list($reply, $status) = $response;
if ($status->code == 0) {
    $aaaa = $reply->getGlobalData();
    $globalad = [];
    foreach ($aaaa as $k=>$v){
        $globalad[$k]['ad_id'] = $v->getAdId();
        $globalad[$k]['ad_name'] = $v->getAdName();
        $globalad[$k]['order_id'] = $v->getOrderId();
        foreach ($v->getTime() as $time){
//            echo "<pre>";
//            print_r($time);
            $globalad[$k]['time']['date'] = $time->getDate();
            foreach ($time->getTime() as $ti){
                $globalad[$k]['time']['time']['start'] = $ti->getStart();
                $globalad[$k]['time']['time']['end'] = $ti->getEnd();
            }

        }
        $globalad[$k]['union_ad_place_id'] = $v->getUnionAdPlaceId();
        $globalad[$k]['information'] = $v->getInformation();
        $globalad[$k]['payment'] = $v->getPayment();
        $globalad[$k]['platform_type'] = $v->getPlatformType();

        foreach ($v->getCreative() as $ke=>$va){
            $globalad[$k]['creative'][$ke]['creative_id'] = $va->getCreativeId();
            $globalad[$k]['creative'][$ke]['creative_name'] = $va->getCreativeName();
            $globalad[$k]['creative'][$ke]['ad_url'] = $va->getAdUrl();
            $globalad[$k]['creative'][$ke]['annotations'] = $va->getAnnotations();
            foreach ($va->getMaterials() as $key=>$val){
                $globalad[$k]['creative']['Materials'][$key]['path'] = $val->getPath();
                $globalad[$k]['creative']['Materials'][$key]['scale'] = $val->getScale();
                $globalad[$k]['creative']['Materials'][$key]['width'] = $val->getWidth();
                $globalad[$k]['creative']['Materials'][$key]['height'] = $val->getHeight();
                $globalad[$k]['creative']['Materials'][$key]['annotations']['annotations'] = $val->getAnnotations()['annotations'];


            };
        }
    }

    echo "<pre>";
    print_r($globalad);
    //TODO
} else {
    $code = -1;
    $msg = 'grpc request failed';
}
