<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$API_KEY = 'b68bc195';

$filmler = [
    'Nightcrawler', 'Drive', 'Scarface', 'Legend',
    'Seven', 'Prisoners', 'Goodfellas', 'Taxi Driver'
];

$sonuclar = [];

foreach ($filmler as $filmAdi) {
    $url = 'https://www.omdbapi.com/?t=' . urlencode($filmAdi) . '&apikey=' . $API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    curl_close($ch);

    if (!$response) continue;

    $data = json_decode($response, true);

    if (isset($data['Response']) && $data['Response'] === 'True') {
        $sonuclar[] = [
            'title'      => $data['Title']      ?? '',
            'year'       => $data['Year']        ?? '',
            'poster'     => $data['Poster']      ?? 'N/A',
            'imdbRating' => $data['imdbRating']  ?? 'N/A',
            'genre'      => $data['Genre']       ?? ''
        ];
    }
}

echo json_encode($sonuclar);
?>