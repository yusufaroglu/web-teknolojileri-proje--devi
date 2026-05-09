<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$API_KEY = 'b68bc195';

$filmler = [
    'The Godfather',
    'Eternal Sunshine of the Spotless Mind',
    'Kill Bill: Vol. 1',
    'Warrior',
    'La La Land',
    'John Wick',
    'Pulp Fiction',
    'Interstellar'
];

$sonuclar = [];

foreach ($filmler as $filmAdi) {
    $url = 'https://www.omdbapi.com/?t=' . urlencode($filmAdi) . '&apikey=' . $API_KEY;
    
    $response = file_get_contents($url);
    
    if ($response === false) continue;
    
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
