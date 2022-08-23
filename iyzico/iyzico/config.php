<?php

require_once('IyzipayBootstrap.php');


IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-1H8PBswesoAqSYUMvPOJqGGJWLIkVEaQ");
        $options->setSecretKey("sandbox-UfMVXIvQpDq5ummkWpqSn74UjC7gjllg");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com/");
        return $options;
    }
}