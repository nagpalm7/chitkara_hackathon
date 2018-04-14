<?php
// set variables
$queryUrl = "http://api.kairos.com/enroll";
$imageObject = '{"image":"YOUR_IMAGE_URL"}';
$id="";
$gallery="";
$APP_ID = "63e167c7";
$APP_KEY = "cccf0f5ffbd82f6573d1ba8f80288e74";
$request = curl_init($queryUrl);
// set curl options
curl_setopt($request, CURLOPT_POST, true);
curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject,$id,$gallery);
curl_setopt($request, CURLOPT_HTTPHEADER, array(
        "Content-type: application/json",
        "app_id:" . $APP_ID,
        "app_key:" . $APP_KEY
    )
);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($request);
// show the API response
echo $response;
// close the session
curl_close($request);
?>
