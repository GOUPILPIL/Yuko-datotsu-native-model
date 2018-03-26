<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/21/18
 * Time: 1:26 PM
 */

session_start ();
require __DIR__.'/models/model.php';
require __DIR__.'/models/session.php';

$bdd = initbdd();

if(!isset($_SESSION['id']))
{
    header('Location:register.php');
    exit();
}

if (isset($_POST["address"])) {
    $address=$_POST["address"];
    $latLong = getLatLong($address);
    $latitude = $latLong['latitude']?$latLong['latitude']:'Not found';
    $longitude = $latLong['longitude']?$latLong['longitude']:'Not found';
    echo $latitude . " ";
    echo $longitude;
}


function getLatLong($address){
    if(!empty($address)){
        //Formatted address
        $formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=true_or_false&key=AIzaSyChgkCStI_CzqTWxuteujDUeEBF90it_h8');
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
        $data['latitude']  = $output->results[0]->geometry->location->lat;
        $data['longitude'] = $output->results[0]->geometry->location->lng;
        //Return latitude and longitude of the given address
        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }else{
        return false;
    }
}


require __DIR__.'/views/add_event_view.php';
?>