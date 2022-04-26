<?php

session_start();

// set session language to german
$_SESSION["lang"] = "de";

// check if language cookie exists, if so set language to cookie value
if(!isset($_COOKIE["language"])){
    // no cookie found, set language cookie to default
    setcookie("language", "de", time() + 60*60*24*30*2*2, "/");
}else{
    // cookie found, set language to cookie value
    $cookie_lang = $_COOKIE["language"];
    if($cookie_lang === "de" || $cookie_lang === "en" || $cookie_lang === "es"){
        $_SESSION["lang"] = $cookie_lang;
    };
};

// require language file
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/languages/" . $_SESSION["lang"] . ".php";