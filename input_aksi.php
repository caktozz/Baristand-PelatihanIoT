<?php 
include 'koneksi.php';
require_once 'vendor/autoload.php';

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Kreait\Firebase\ServiceAccount;

$state          = $_POST['state'];
$total_voltage  = $_POST['total_voltage'];
$lowest_voltage = $_POST['lowest_voltage'];
$temp_battery   = $_POST['temp_battery'];

mysqli_query($conn,"INSERT INTO tb_monitor values('','$state','$total_voltage','$lowest_voltage','$temp_battery')");
header("location:index.php?pesan=input");

$factory = (new Factory)->withServiceAccount(__DIR__.'/firebaseKey.json');

$database   = $factory->createDatabase();
$ref        = $database->getReference('monitoring');

$key        = 1;

$ref->getChild($key)->set([
    'state'             => $state,
    'total_voltage'     => $total_voltage,
    'lowest_voltage'    => $lowest_voltage,
    'temp_battery'      => $temp_battery
]);

return $key;
?>