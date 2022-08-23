<?php

require_once('config.php');



# create request class
$request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId($siparisler['id']);
$request->setPrice($sepettoplam);
$request->setPaidPrice($sepettoplam);
$request->setCurrency(\Iyzipay\Model\Currency::TL);
$request->setBasketId($siparisler['id']);
$request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
$request->setCallbackUrl("https://www.butikv1.umutweb.com/iyzico/sonuc.php?id={$siparisler["paytr"]}");
$request->setEnabledInstallments(array(2, 3, 6, 9));


$buyer = new \Iyzipay\Model\Buyer();
$buyer->setId($siparisler['id']);
$buyer->setName($siparisler['adsoyad']);
$buyer->setSurname($siparisler['adsoyad']);
$buyer->setGsmNumber($siparisler['telefon']);
$buyer->setEmail($siparisler['eposta']);
$buyer->setIdentityNumber("74300864791");
$buyer->setLastLoginDate("2015-10-05 12:43:35");
$buyer->setRegistrationDate("2015-10-05 12:43:35");
$buyer->setRegistrationAddress("umut");
$buyer->setIp("321312");
$buyer->setCity("istanbul");
$buyer->setCountry("Turkey");
$buyer->setZipCode("34514");
$request->setBuyer($buyer);

$shippingAddress = new \Iyzipay\Model\Address();
$shippingAddress->setContactName($siparisler['adsoyad']);
$shippingAddress->setCity("istanbul");
$shippingAddress->setCountry("Turkey");
$shippingAddress->setAddress("istanbul");
$shippingAddress->setZipCode("41232");
$request->setShippingAddress($shippingAddress);

$billingAddress = new \Iyzipay\Model\Address();
$billingAddress->setContactName($siparisler['adsoyad']);
$billingAddress->setCity($siparisler['adsoyad']);
$billingAddress->setCountry("Turkey");
$billingAddress->setAddress($siparisler['adsoyad']);
$billingAddress->setZipCode($siparisler['adsoyad']);
$request->setBillingAddress($billingAddress);

$basketItems = array();
$firstBasketItem = new \Iyzipay\Model\BasketItem();
$firstBasketItem->setId($siparisler['id']);
$firstBasketItem->setName($siparisler['adsoyad']);
$firstBasketItem->setCategory1($siparisler['adsoyad']);
$firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
$firstBasketItem->setPrice($sepettoplam);
$basketItems[0] = $firstBasketItem;
$request->setBasketItems($basketItems);


# make request
$checkoutFormInitialize = \Iyzipay\Model\CheckoutFormInitialize::create($request, Config::options());

# print result
//print_r($checkoutFormInitialize);
//print_r($checkoutFormInitialize->getstatus());
print_r($checkoutFormInitialize->getErrorMessage());
print_r($checkoutFormInitialize->getCheckoutFormContent());



?>

