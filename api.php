<?php

$API_KEY = getenv("GROQ_API_KEY");

if (!$API_KEY) {
    http_response_code(500);
    echo json_encode(["error" => "API key missing"]);
    exit();
}
