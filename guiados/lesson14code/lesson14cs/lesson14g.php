<?php

require_once 'cellphone.php';
$myPhone=new Cellphone();
$myPhone->phoneNumber='555-555-1111';
$myPhone->model= '3GS';
$myPhone->color='Black';
$myPhone->addContact('555-555-1212', 'Sally Strange');
$myPhone->addContact('555-555-1515', 'George Mason');
$myPhone->addSongs(array('ibelieve.mp3','heaven.mp3','songs.mp3'));
echo 'Phone number: ' . $myPhone->phoneNumber . '<br/>';
echo 'Model: ' . $myPhone->model . '<br/>';
echo 'Color: ' . $myPhone->color . '<br/>';
$myPhone->displayContacts();
echo '<pre>';print_r($myPhone->songs);echo '</pre>';
echo 'My phone has ' . $myPhone->countSongs(). ' songs.<br/>';

