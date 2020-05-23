<?php
namespace App;
use Framework\Handler\IException;
use Framework\Http\Http;
use Framework\Http\Request;
use Framework\Http\Response;

// Include autoload for composer packages
include_once '../vendor/autoload.php';
// Setup Configurations
include_once '../app/config.php';

// Start Application 😉
$http = new Http();

// Now let's Route 🚀🚀🚀

$http->get('/', function (Request $req, Response $res) {
   $res->send(
      $res->render('welcome.html'), 200
   );
});

// your other routes...

$http->end();