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

$request = new AdObject();

$response = $client->Query($request)->wait();

list($reply, $status) = $response;
if ($status->code == 0) {

    print_r($reply->getAdId());die;
    //TODO
} else {
    $code = -1;
    $msg = 'grpc request failed';
}
