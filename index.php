<?php

$url = "https://www.xvideos.com";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

echo $resp = curl_exec($curl);
curl_close($curl);
/*header("Location: https://www.xv-horezeedipaif.com");*/
?>




