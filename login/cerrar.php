
<?php include 'include/header.php'; ?>


<?php
session_unset();
session_destroy();
header("Location: index.php");
				die();

?>

<body style="background-color: rgb(87,35,100)" class="text-white">
	

	

	


<?php include 'include/footer.php'; ?>