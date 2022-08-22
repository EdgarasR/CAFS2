<?php

function flatten($array, $prefix = '') {
    $result = [];

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, flatten($value, $prefix . $key . '.'));
        } else {
            $result[$prefix . $key] = $value;
        }
    }

    return $result;
}

try {
    $data = json_decode(file_get_contents('https://randomuser.me/api/'), true);

    if (isset($data) && array_key_exists('results', $data)) {
        $flatData = [];

        foreach ($data['results'] as $line) {
            $flatData[] = flatten($line);
        }

        $file = fopen('Excels/excelFile.csv', 'w');

        foreach ($flatData as $line) {
            fputcsv($file, array_keys($line));

            fputcsv($file, array_values($line));
        }

        fclose($file);

        echo "Info from 'https://randomuser.me/api/' saved to 'Excels/excelFile.csv'";
        exit;
    } else {
        throw new Exception('No data.');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}