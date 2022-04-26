<?php 
    $dir = './uploaded/';
    $types = array('image/jpeg', 'image/png');
    $maxsize = 10000*1024;
    $imgtypes = array('.jpg','.png');



    $title='Foundation for the Zoo';

    $header=array(
        'imgsrc'=>'logo.png',
        'cim'=>'Foundation for the Budapest Zoo'
    );
    $footer = array(
        'copyright' => 'Copyright '.date("Y").'.',
        'ceg' => 'Foundation for the Budapest Zoo'
    );

    $pages = array(
        '/' => array('fajl' => 'fooldal', 'szoveg' => 'Home'),
        'video' => array('fajl' => 'video', 'szoveg' => 'Videos'),
        'gallery' => array('fajl' => 'gallery', 'szoveg' => 'Gallery'),
        'details' => array('fajl' => 'details', 'szoveg' => 'Details'),
        'contact' => array('fajl' => 'contact', 'szoveg' => 'Contact'),
        'email' => array('fajl' => 'email', 'szoveg' => 'Send Email'),
        'message' => array('fajl' => 'message', 'szoveg' => 'Your Email'),
    );

    $errorpage = array ('fajl' => '404', 'szoveg' => 'Hiba: A keresett oldal nem található!');

?>