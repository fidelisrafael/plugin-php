<?php
namespace \test\testing;

include "test.php";
include_once "other.php";
require "test/test.php";
require_once "other/other.php";

include("test.php");
include_once("other.php");
require("test/test.php");
require_once("other/other.php");

if ((include 'vars.php') == TRUE) {
  echo 'OK';
}

if ((include ('vars.php')) == TRUE) {
    echo 'OK';
}

include 'php/product' . $variable . '.php';

include ( "test.php" );
include_once ( "other.php" );
require ( "test/test.php" );
require_once ( "other/other.php" );

include 'http://www.example.com/file.php?foo=1&bar=2';
include $filename;
(isset($_GET['p']) && $_GET['p'] === 'home') ? include 'pages/home.php' : '';
include Kohana::find_file('views', 'admin/system/errors');
include((("test.php")));
