GRPC
====
#### 下载protoc
url [https://github.com/protocolbuffers/protobuf/releases]

grpc php版本客户端.   
server: `https://glab.tagtic.cn/AdsGroup/hotniuer_n`

#### 从server端拷贝proto文件

从php版本的server里拷贝proto文件到php目录

#### 生成php代码

`protoc --proto_path=./ --php_out=.  --plugin=protoc-gen-grpc  rawAd.proto`

#### php扩展
```
pecl install grpc
pecl install protoc

更改php.ini
```

#### 添加自动加载

```$xslt
{
  "name": "grpc-php-client",
  "authors": [
    {
      "name": "zhengxiaojun",
      "email": "zhengxiaojun@donews.com"
    }
  ],
  "require": {
    "grpc/grpc": "^v1.19.0",
    "google/protobuf": "^v3.8.0"
  },
  "autoload":{
    "psr-4":{
      "GPBMetadata\\":"GPBMetadata/",
      "Ad\\":"Ad/"
    }
  }
}
```

#### 根据rawAd.proto编写客户端

#### 编写请求

#### 结果验证

`php client.php`  

> -----广告信息
  xxxxxxxxxxxxx