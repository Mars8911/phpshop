<?php
//瀏覽器cache 緩衝
ob_start();
//使用Session
session_start();
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
//定義前台路徑
defined("TEMPLATES_FORNT") ? null : define("TEMPLATES_FORNT", __DIR__  . DS . "templates/front");
//定義後台路徑
defined("TEMPLATES_BACK") ? null : define("TEMPLATES_BACK", __DIR__  . DS . "templates/back");

// 定義連線數據庫
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "bryan1688");
defined("DB_NAME") ? null : define("DB_NAME", "php_shop");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

require_once("functions.php");
