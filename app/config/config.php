<?php
/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new \Phalcon\Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => 'yuanbin123.',
        'dbname'      => 'b2b2c',
        'charset'     => 'utf8',
    ],
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'toolsDir'       => APP_PATH  . '/tools/',
        'alipayDir'      => APP_PATH  . '/alipay/',  //末尾记得加斜杠

        // This allows the baseUri to be understand project paths that are not in the root directory
        // of the webpspace.  This will break if the public/index.php entry point is moved or
        // possibly if the web server rewrite rules are changed. This can also be set to a static path.

        //'baseUri'        => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),
    ],

    'alipay' => [
        //应用ID,您的APPID。
        'app_id' => "2017042406934214",

        //商户私钥
        'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDi8syJ6zWRSHo+IbZlhrq0Px+vEMV6UR05cYNDDJBUZcYkjoMTA/tkTEt8PZTtr/XtbOcy+JrkOOno8GFf9bXJJBOqzfoMVJ564XlWzDzeTauCLK9H9m0vKEDcDVjyig4hbIhZRilsP2sy5xRqLJrcu098FcAb4MnDpClOOP2cnuM2aGvJvaUgd/rUHJFnkLgSEZF6kDz3sR4PJ5WNH6arFyRlBt1bsLooMK/208AwOkETfBI28hovCGljKUjMca8wuPQm7XaUsyXC6k9etEb5tbBnf8LkelTWDbqlDf8A9ucEvFXArzwL3T4Vlueskie9a7lSDz8/Hghk3cDnWLMDAgMBAAECggEBAMhzRZ+npUeuKXKJWk3wIyYi/vwkpxezX0mmbhahmTVCMzGEwlbgVIGxNZcF2W3a1i+f2dFWbZCYiFmbP5Z/MtH20Hwzs+CCOPw1/HNir3x2Q78Vcrfv+14Egs0Z6O9IatSwxPl9FActOKTcH1bsENhXhQwHNggpkmv/qhASHEbhEefvb+sZgCC4DnYzLrOONk4ZUCibZc60mXeObap6huYJAk3bDeX0D3EEBbRVzS3cD9aZvvKo3/ysFpUDR2NAxGcOJUUGiEPuKshBQ2g6VgtcENfjltxbpJeSHZ3IT9HGGd3KgfsHAyuCaEdv6j20XxbtrYz0JTNoMDQckKc1t2ECgYEA8kpKq/bQaQtjxSRfTKxWJSdSAp6COPMXsI1NsJ+2SfHnb8hi2Rp5xcLECTyGYsKHS9q8/ddlMTzRXPF1z96bsgc2FVp3+9NcGxjDV/l9YokRKHICA6HYGg1taGrj8MXDYRwUCY3q4gRQpX6tfdVO8Jt5apCDWJOozlSrhjbrvPECgYEA78pF83feZD4el9SyIgY1lNkoMdlawjJPIwWRm0LdC8CslXpGmrb2DUSyBlrvrxjXoG8Nia8wM4sjVy46BctMpvZ48LIuUJWE9BuT1ElyQDI9Z6b/ZmlHvoWjlY+oOob6UH06MKyhdzPsMfFJNSJr2cwq40WPsebXpNBRV9AO/zMCgYAlKYfygFTPB9QxtLZ5SCWeZT2K8Uz/9yk3BzVXVefbx6K73nxq2Ei9MHZpBEOIelXOKKq8NIFs3+ss2kw7qeUvlTOSauHkWjLSZSXxJG864dMj5PiyHezLcivJzDtR/sNM7cWVAZN5PzgvahKqLkGBXhdtZOUAfQVzQEFewKW/wQKBgCp28chaFAJAlf5hZmJsIxUHF/0r9sypSCZ1mAGc57RrHKUkEFjZyd0zqytA821Ywubgg888PRcDrvCDeTcJd7uhrm1BwL34nKD2OUnA8AC6ZPF0O4qRXmk5FW0pEau7t5yFcMap67ZGda+qgUJtpBff9kBlUzs4HDxNv/oDGITNAoGBAL/Td8EIF0xND+j+zYwfS+eCRVD7zXhNVdhVKc2/r/FYu0sk2wZXBKZrUd2hwCBVl6A7JAEctEeMsHdCic42Q0QKBxBue0kCUyj/PqgbMoOeVytCsXFPTw5g/qeiV9qm54Lm3e7oGuz/dJQUmFgwFwQadNA1AuGVCdkFPZZ8rihM",        //异步通知地址
        'notify_url' => "http://wonbin.xin/alipay/notify",

        //同步跳转
        'return_url' => "http://wonbin.xin/alipay/return",

        //编码格式
        'charset' => "UTF-8",

        //签名方式
        'sign_type'=>"RSA2",

        //支付宝网关
        'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

        //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
        'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxCe3YlwJ9UeYAUXWFK2eCvlfcqwz5QHUbKnY3CwuzWQaZFOiB+pImioi7F4hgf/OrtS2/N5JfBn4jslhChCUV3GkaaeUc0mvQzYSx1D2RsXVOZGqEnp3fdXPTTlaGrDaCbsIaOkQ3R4uIqXjWz+Z02WTUp2Ogkvev2XymouNzfI3ZcJ3Ul7agumUmWf4cFlU9lFBENl2m8nxUEHC1Qrxmv+4fMzWjMa5EUbAV9rjEhmBvud4CE6dabN2XFW8FojKJr7kYZj0agfyevhIN6aP/nqevbkJJsxPKRRQsH4FyDRy2jhrwoeYncfyGPt/wLnFY9wiIPhtekkG107pmZ7fMwIDAQAB"]
]);
