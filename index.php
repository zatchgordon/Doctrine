<?php
require_once("bootstrap.php");
use gordonz2\Model\Album;

$sweetEscape = new Album();
$sweetEscape->setArtist("Gwen Stefani");
$sweetEscape->setGenre("Awesome");
echo $sweetEscape->getArtist() . " "  . $sweetEscape->getGenre();
