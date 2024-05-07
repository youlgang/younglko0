<?php
$ip           = $_SERVER['REMOTE_ADDR'];
if ($ip !== '127.0.0.1') {
  $getip        = 'http://ip-api.com/json/' . $ip;
  $curl         = curl_init();
  curl_setopt($curl, CURLOPT_URL, $getip);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
  $content      = curl_exec($curl);
  curl_close($curl);
  $details      = json_decode($content);
  $country_code = $details->countryCode;
  $nama_country = $details->country;
  $city         = $details->city;
  $state        = $details->regionName;
  Flight::set('userInfo', $details);
}
