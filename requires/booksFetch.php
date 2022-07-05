<?php
require("./connexion.php");
session_start();

//** fetch books for sliders
/* if (isset($_GET['sliders'])) {
	$images = mysqli_query($db_conn, "select image_dist, titre, livre_id from books limit 32");
	$result = mysqli_fetch_all($images, MYSQLI_ASSOC);

	if (!$result) {
		echo "the books are not available";
	} else {
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	};
} */

// ** fetch all the books
if (isset($_GET['all'])) {
	$lang = $_GET['lang'];
	$books = mysqli_query($db_conn, "SELECT livre_id,titre,image_dist,categorie_id  from books  limit 16"); /* where lang = '$lang'*/
	$data = array();
	if (!$books) {
		echo "the books are not available";
	} else {
		while ($result = mysqli_fetch_assoc($books)) {
			$livre_id = $result['livre_id'];
			$titre = $result['titre'];
			/* $description = $result['description']; */
			/* 	$annee_production = $result['annee_production']; */
			/* $taille = $result['taille']; */
			/* $lang = $result['lang']; */
			$image_dist = $result['image_dist'];
			/* $nombre_page = $result['nombre_page']; */
			$category = $result['categorie_id'];

			$a = array("titre" => $titre, "livre_id" => $livre_id, /* 'description' => $description, */ 'category' => $category, /*  "annee_production" => $annee_production, */ /* 'lang' => $lang, */ 'image_dist' => $image_dist, /* 'taille' => $taille, */ /* 'nombre_page' => $nombre_page */);
			array_push($data, $a);
		}
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
	}
}

// ** fetch for the searched result
if (isset($_GET['searching'])) {
	$insertedValue = $_GET['insertedValue'];
	$books = mysqli_query($db_conn, "select titre, image_dist, livre_id from books where titre REGEXP '.*" . $insertedValue . "'");
	$data = array();
	if (!$books) {
		echo "the books are not available";
	} else {
		while ($result = mysqli_fetch_assoc($books)) {
			$titre = $result['titre'];
			$image_dist = $result['image_dist'];
			$livre_id = $result['livre_id'];
			$a = array("titre" => $titre, 'image_dist' => $image_dist, 'livre_id' => $livre_id);
			array_push($data, $a);
		}
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
	}
}


// ** fetch the book details
if (isset($_GET['book'])) {
	$livre_id = $_GET['key'];
	$book = mysqli_query(
		$db_conn,
		"select * from books where livre_id = " . $livre_id
	);
	$data = array();
	if (!$book) {
		echo "the book is not available";
	} else {
		/* 	while ($result = mysqli_fetch_assoc($book)) {
			$titre = $result['titre'];
			$description = $result['description'];
			$annee_production = $result['annee_production'];
			$taille = $result['taille'];
			$lang = $result['lang'];
			$image_dist = $result['image_dist'];
			$nombre_page = $result['nombre_page'];
			$category = $result['categorie_id'];
			$a = array(
				"titre" => $titre,
				'description' => $description,
				'category' => $category,
				"annee_production" => $annee_production,
				'lang' => $lang, 
				'image_dist' => $image_dist,
				'taille' => $taille, 
				'nombre_page' => $nombre_page
			);
			array_push($data, $a);
		} */
		$result = mysqli_fetch_assoc($book);
		if (!$result) {
			echo "some thing when wrong";
		} else {
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
		}
		/* header("location: bookDetail.html");  */
	}
}

// ** fetch for the books section 
if (isset($_GET['books'])) {

	$specification = $_GET["specification"];
	$specification_value = $_GET["specificationValue"];
	if ($specification === "annee_production") {
		$books = mysqli_query($db_conn, "SELECT titre,categorie_id, image_dist, livre_id from books where $specification between $specification_value[0] and  $specification_value[1]");
	} else {
		$books = mysqli_query($db_conn, "SELECT titre,categorie_id, image_dist, livre_id from books where $specification like '$specification_value'");
	}

	$data = array();
	if (!$books) {
		echo "the books are not available";
	} else {
		while ($result = mysqli_fetch_assoc($books)) {
			$titre = $result['titre'];
			$image_dist = $result['image_dist'];
			$livre_id = $result['livre_id'];
			$categorie = $result['categorie_id'];
			$a = array("titre" => $titre, 'categorie' => $categorie, 'image_dist' => $image_dist, 'livre_id' => $livre_id);
			array_push($data, $a);
		}
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
	}
}
if (isset($_GET['year1'])) {
	$year1 = $_GET['year1'];
	$year2 = $_GET['year2'];
	$results = mysqli_query($db_conn, "SELECT titre,categorie_id, image_dist, livre_id from books where annee_production between $year1 and $year2");
	echo "<li>avant 1900</li>";
}

// ** track the download click
if (isset($_POST["id"])) {
	$livre_id = $_POST["id"];
	$user = $_SESSION["visiter_id"];
	$sql_lecteur_insert = mysqli_query($db_conn, "INSERT into telechargement(lecteur_id, book_id) value('$user','$livre_id')");

	if ($sql_lecteur_insert) {
		/* echo json_encode("done", JSON_UNESCAPED_UNICODE); */
		echo "OK";
	} else {
	}

	/* 	$sql_telechar_insert = mysqli_query($db_conn, "INSERT into telechargement(lecteur_id,book_id) value ( $livre_id, $name,  )") or die(mysqli_connect_error()); */
}
