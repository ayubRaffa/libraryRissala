<?php
session_start();
require("./requires/connexion.php");
if (isset($_POST['sign_in'])) {
  $name = $_POST['txtname'];
  $password = $_POST['txtpassword'];

  $sql = "SELECT * from users where nom='$name' and password='$password'";
  $query = mysqli_query($db_conn, $sql);

  if ($query) {
    if ($result = mysqli_fetch_assoc($query)) {
      $_SESSION["user_rank"] = $result["rank"];
      $_SESSION["user_firstname"] = $result["prenom"];
      $_SESSION["user_lastname"] = $result["nom"];
      $_SESSION["user_gender"] = $result["genre"];
      $_SESSION["user_id"] = $result["user_id"];

      $inscrit = 1;
      $nationalite = "unknown";
      $name = $_SESSION['visiter_ip'];
      $sql_lecteur_insert = mysqli_query($db_conn, "INSERT into lecteurs(nom, nationalite, inscrit, user_id) value('$name','$nationalite',$inscrit,'" . $_SESSION['user_id'] . "')");

      if ($sql_lecteur_insert) {
        $_SESSION['visiter_id'] = mysqli_insert_id($db_conn);
      }
      if ($_SESSION["user_rank"] === "admin") {
        header("location: ./admin/index.php");
      }
    } else {
      /* header("location:index.php"); */
      echo "mote de pass ses fskldfj";
    }
  } else {
    echo mysqli_connect_error();
  }
}



if (isset($_POST['registring'])) {
  $lastname = strip_tags($_POST["txtlastname"]);
  $firstname = strip_tags($_POST['txtfistname']);
  $email = strip_tags($_POST['txtemail']);
  $password = strip_tags($_POST['txtpassword']);
  $date = $_POST['date'];
  $tel = "000000000";
  $gender = $_POST['radiogender'];

  $sql = "INSERT into users(nom,prenom,email,tel,genre,password) value('$lastname','$firstname','$email','$tel','$gender','$password')";

  $query = mysqli_query($db_conn, $sql);

  if ($query) {
    $_SESSION["user_rank"] = $result["rank"] || "user";
    $_SESSION["user_firstname"] = $firstname;
    $_SESSION["user_lastname"] = $lastname;
    $_SESSION["user_gender"] = $gender;
    $_SESSION["user_id"] = mysqli_insert_id($db_conn);
    $inscrit = 1;
    $nationalite = "unknown";
    $name = $_SESSION['visiter_ip'];
    $sql_lecteur_insert = mysqli_query($db_conn, "INSERT into lecteurs(nom, nationalite, inscrit, user_id) value('$name','$nationalite',$inscrit,'$user_id')");
    if ($sql_lecteur_insert) {
      $_SESSION['visiter_id'] = mysqli_insert_id($db_conn);
      header("location: ../index.php");
    } else {
    }
  } else {
    echo json_encode(mysqli_connect_error(), JSON_UNESCAPED_UNICODE);
  }
}


if (!isset($_SESSION["visiter_ip"])) {
  /*  header("Access-Control-Allow-Origin: https://api.ipify.org");
    if ($ip = @file_get_contents('https://api.ipify.org')) {$_SESSION["visiter_id"] = $ip;
    } else {$_SESSION["visiter_id"] = "unknown";}
    $_SESSION["visiter_id"] = $_SERVER['REMOTE_ADDR']; */
  function get_client_ip()
  {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
      $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
      $ipaddress = 'UNKNOWN';
    return $ipaddress;
  }
  $_SESSION['visiter_ip'] = strval(get_client_ip());
  /*   $key = "db0e308822a0da00d8618bac05a454cc70bd32a05606ee8aa361e9d5e51f1a58";
    $url = "https://api.ipinfodb.com/v3/ip-country/?key=$key&ip=IPV4_OR_IPV6_ADDRESS&format=json";
    $response = file_get_contents($url); */

  /*  $name = $_SESSION["visiter"]; */
}
if (!isset($_SESSION['visiter_id'])) {
  $name = $_SESSION['visiter_ip'];
  $nationalite = "unknown";
  $inscrit = 0;
  $sql_lecteur_insert = mysqli_query($db_conn, "INSERT into lecteurs(nom, nationalite, inscrit, user_id) value('$name','$nationalite',$inscrit,1000)");
  $_SESSION['visiter_id'] = mysqli_insert_id($db_conn);
}
