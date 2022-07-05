<?php
session_start();
session_destroy() or die("cant log out");

header("location: ../index.php");
