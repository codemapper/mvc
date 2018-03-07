<?php

/*
 * Die index.php Datei ist der Einstiegspunkt des MVC. Hier werden zuerst alle
 * vom Framework benötigten Klassen geladen und danach wird die Anfrage dem
 * Dispatcher weitergegeben.
 *
 * Wie in der .htaccess Datei beschrieben, werden alle Anfragen, welche nicht
 * auf eine bestehende Datei zeigen hierhin umgeleitet.
 */

use Bbc\MVC\Lib as Lib;

require __DIR__ . '/../vendor/autoload.php';

$dispatcher = new \Bbc\MVC\Lib\Dispatcher();
$dispatcher->dispatch();
