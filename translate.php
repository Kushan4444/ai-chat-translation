<?php
function translateToSinhala($text)
{

    // Insert your Google Translate API key here for the translation to work
    $apiKey = "API_KEY";

    // Google Translate API URL
    $url = "https://translation.googleapis.com/language/translate/v2?key=$apiKey";

    $data = [
        "q" => $text,
        "target" => "si"
    ];

    // Initialize cURL session with the API URL
    $ch = curl_init($url);


    // Return the response instead of outputting it directly
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Send JSON encoded data in POST request
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Set request headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    // Execute the API request
    $res = curl_exec($ch);
    curl_close($ch);

    // Decode the JSON response into an associative array
    $json = json_decode($res, true);

    // Return translated text if available, otherwise return an error message
    return $json['data']['translations'][0]['translatedText'] ?? "පරිවර්තනය අසාර්ථකයි";
}
