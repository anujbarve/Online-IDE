<?php

session_start();

$lang = $_POST["lang"];
$scode = $_POST["scode"];
$stdin = $_POST["stdin"];
$filename = $_POST["filename"];

$_SESSION['filename'] = $filename;
$_SESSION['input'] = $stdin;
$_SESSION['lang'] = $lang;
$_SESSION['scode'] = $scode;

if (isset($_POST['submit'])) {

	
$scode_enc = base64_encode($scode);
$stdin_enc = base64_encode($stdin);

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=true&fields=*",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{\r
    \"language_id\": \"$lang\",\r
    \"source_code\": \"$scode_enc\",\r
    \"stdin\": \"$stdin_enc\"
}",
	CURLOPT_HTTPHEADER => [
		"Content-Type: application/json",
		"X-RapidAPI-Host: judge0-ce.p.rapidapi.com",
		"X-RapidAPI-Key: 747fcd0dc0msh0a929fce563d14dp18d82djsn44c100e29c75",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $token = json_decode($response);
    $token_name = $token->token; 

    $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://judge0-ce.p.rapidapi.com/submissions/$token_name?base64_encoded=true&fields=*",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: judge0-ce.p.rapidapi.com",
		"X-RapidAPI-Key: 747fcd0dc0msh0a929fce563d14dp18d82djsn44c100e29c75"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$decoded = json_decode($response);
    $output = $decoded->stdout;
    $final_output = base64_decode($output);
    // header("location: ../online_compiler.php?output=$final_output");
	$status_id = $decoded->status->id;
	$error = $decoded->status->description;

	if($status_id == "3"){
		header("location: ../online_compiler.php?output=success");
		$_SESSION['final_output'] = nl2br($final_output);
	}else{
		header("location: ../online_compiler.php?output=error");
		$_SESSION['final_output'] = nl2br($error);
	}

	echo "<h1>RESPONSE</h1>";
	echo $response;
	echo "<br>";
	echo "<h1>STATUS</h1>";
	echo "<br>";
	echo $status_id;
	echo "<h1>ERROR DESC</h1>";
	echo "<br>";
	echo $error;
}
}


}
elseif (isset($_POST['save'])) {

	require_once "../admin/connection.php";
	$name = $_POST['filename'];
	$lang = $_POST["lang"];
	$scode = mysqli_real_escape_string($conn,$_POST["scode"]);
	$username = $_SESSION['userUid'];
	$sql = "INSERT INTO user_files (name,extension,source_code,user_name)
	VALUES ('$name','$lang','$scode','$username')";
	if (mysqli_query($conn, $sql)) {
	   header("location: ../online_compiler.php");
	   exit();
	} else {
	   echo "Error: " . $sql . "
" . mysqli_error($conn);
	}
	mysqli_close($conn);	

}elseif(isset($_POST['update'])){
	require_once "../admin/connection.php";
	$name = $_POST['filename'];
	$lang = $_POST["lang"];
	$scode = mysqli_real_escape_string($conn,$_POST["scode"]);
	$username = $_SESSION['userUid'];
	$sql = "UPDATE `user_files` SET `extension`='$lang',`source_code`='$scode',`user_name`='$username' WHERE `name` = '$name'";
	if (mysqli_query($conn, $sql)) {
	   header("location: ../online_compiler.php?message=file_updated_successfully");
	   exit();
	} else {
	   echo "Error: " . $sql . "
" . mysqli_error($conn);
	}
	mysqli_close($conn);	
}


?>