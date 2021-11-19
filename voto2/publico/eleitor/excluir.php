<?php

include '../config.php';

include CONTROLE . 'eleitor.php';

excluir( $_GET['id'] );
header('location:lista.php');