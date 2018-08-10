<?php
declare(strict_types=1);

echo 'hello from the client container! Calling the API...<br>';
print connectToAPI();

function connectToAPI() {
    $url = 'http://nginx-api';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    if ($output === false) {
        var_dump('CURL error: ' . curl_error($ch));
    }

    //$info = curl_getinfo($ch);
    curl_close($ch);
    return $output;
}

