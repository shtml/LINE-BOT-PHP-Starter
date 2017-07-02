<?php
$access_token = 'jEDEKZt7wUruK/YR2rAPVBn0OOKAzK7cK9QIlODKwh+Zun7QQbatzHbTKNYJModiwTZUuD4+DYIj8tV9OG3ABT50yharm1Q4t/2F4qW3X8kTBUY7SUN20erxMkNYHsrHl4HsHjc3SkSMxsuF+6U3owdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
