<?php

include '../config.php';

include CONTROLE . 'eleitor.php';

$eleitor = pegar( $_GET['id'] );

include "formulario.php";