<?php

// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';


if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
	$url = '/upload/' . $filename;
}

// Return image url
echo $url;