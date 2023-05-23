<?php

    $dta[0]["nama"] = "risaaa";
    $dta[0]["alamat"] = "jln. doang ga jadian ";
    $dta[0]["tgl_lahir"] = "2004-05-19";

    $dta[1]["nama"] = "dia";
    $dta[1]["alamat"] = "jln. yang jauh ";
    $dta[1]["tgl_lahir"] = "2004-05-19";

    $dta[2]["nama"] = "siapa";
    $dta[2]["alamat"] = "jln. kemana??? ";
    $dta[2]["tgl_lahir"] = "2004-05-19";


    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($dta);