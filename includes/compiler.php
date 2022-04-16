<?php
$lang = $_POST["lang"];
$scode = $_POST["scode"];
$stdin = $_POST["stdin"];

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
	$scode = $decoded->
    $final_output = base64_decode($output);
    header("location: ../online_compiler.php?output=$final_output");
}
}


?>