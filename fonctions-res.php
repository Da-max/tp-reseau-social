<?php
require_once '../DATA/librairie-res.php';

function retourne_auteur()
{
    return explode('/', $_SERVER['REQUEST_URI'])[2];
}

function ajout_post_msg() {
	$content = $_POST['post-msg'] . retourne_auteur() . date();
	file_put_contents($nbPost . '-msg.txt');
}
