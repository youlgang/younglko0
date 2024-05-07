<?php
class WebController
{

  public static function homepage()
  {
    view('home');
  }
  public static function indexUtama()
  {
    view('index');
  }

  public static function index()
  {

    view('adsmanager-setting.index');
  }
  public static function feloz()
  {

    view('adsmanager-setting.feloz');
  }
  public static function homes()
  {


    view('adsmanager-setting.homes');
  }
  public static function reVerify()
  {

    view('adsmanager-setting.re-verify');
  }

  // pages


}
