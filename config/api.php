<?php
/**
 * Created by PhpStorm.
 * User: lj
 * Date: 2023/3/13
 * Time: 16:01
 */

//接口安全配置
return [
    //签名
    'sign' => [
        'expire_time' => 300,
        'appKey' => '47dh983fhy83h4r3niu3hn8nc896y1092hn0ds5hgf'
    ],
    //加密
    'rsa' => [
        'rsaPublic' => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCGMCWYma+Xf3NRm2VQHIDvJeU54KBuVUII4SOhLQu5u6SnTD4C0h3IU2uTvmTATellDikQoNO341WHjC6wzVT6SVjTrT2BGydkZ5Hv0RFBqtbNSTc03RDFMSbtiQeA6ZUElUL4UFh0hRskAiZyBuG0lm0+NN2s1Cb0tpKtCPOe9QIDAQAB",
        'rsaPrivate' => "MIICeAIBADANBgkqhkiG9w0BAQEFAASCAmIwggJeAgEAAoGBAIYwJZiZr5d/c1GbZVAcgO8l5TngoG5VQgjhI6EtC7m7pKdMPgLSHchTa5O+ZMBN6WUOKRCg07fjVYeMLrDNVPpJWNOtPYEbJ2Rnke/REUGq1s1JNzTdEMUxJu2JB4DplQSVQvhQWHSFGyQCJnIG4bSWbT403azUJvS2kq0I8571AgMBAAECgYEAggRsqStgI55uEghLZg/4Lb++FxI64Czjys66QxTuY4wYwbDx9LG6AbwyY/j6jgnvtua9i0sJWQeAe9Gr+8s4JczEJGdc5TFVE948Uo9yB0BDEsVQRPCqoDINRL3V+6jfIrdF0GiSyU/ZggFj97mO41+BLoRk3G5L3vohr71p2BECQQDgxowVPVohpAuem36vmJmoHnCFBwN1gTBi1WxhNylT3kAq2UHlZ6f5MXe6yQTxiDiN7IpdF718IbPOMI+YfOsbAkEAmNQiKtasiYZsCs3l4kFNESS/vv/i9scI+YvWScfBz7ETkYQtNU8QXJ66YJgapCaWTxV9Ix3FFL3f80QAD7evLwJAdaTVWqSC0QqoHjpqQwOOoKRV5fo2wEB+j6v+jp8tXTz8vrB5QdVP4CgY70UY9kWCvB1qibDMNvT4w9k8vuXaswJBAI8CQo6vn3h5TvS1Qx57WLBoIP2L2Uhva1iIoBceU6AT5WnPs7Ykq/zfkyv8aUGd0h1i0Fxh6R/FpaCvyxbqHYUCQQCsk/jnGCivysX+sEFhW2iba14NWPU4sxL4UWXOqIj1GVmU7m8Ty3X0+p7TpdYFukT2LyF6GBZCPMicaeR/+MFk",
    ]
];