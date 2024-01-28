<?php
    if(!isset($_SESSION['nome']) || !isset($_SESSION['email'])) {
        header('Location: ../index.php');
    }
