<?php
header("Content-Type: application/json");

echo json_encode([
    "status" => "success",
    "message" => "PHP Native berjalan di Vercel!",
    "time" => date("Y-m-d H:i:s")
]);
