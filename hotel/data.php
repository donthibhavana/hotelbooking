<?php 
	require 'DbConnect.php';

	if(isset($_POST['aid'])) {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM city WHERE country = " . $_POST['aid']);
		$stmt->execute();
		$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($books);
	}

	function loadAuthors() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM country");
		$stmt->execute();
		$country = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $country;
	}

 ?>