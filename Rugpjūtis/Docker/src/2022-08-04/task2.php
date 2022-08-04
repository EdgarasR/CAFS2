<pre>
<?php

// Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
$weekDays =
[
    'lt' => 
    [
        1 => 'Pirmadienis',
        2 => 'Antradienis',
        3 => 'Trečiadienis',
        4 => 'Ketvirtadienis',
        5 => 'Penktadienis',
        6 => 'Šeštadienis',
        7 => 'Sekmadienis',
    ],
    'en' =>
    [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday',
    ],
];

// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
print_r($weekDays['lt'][1]);
echo '<br><br>';
print_r($weekDays['en'][3]);
echo '<br><br>';

// Parodikite dabartinės dienos pavadinimą
$today = function() use($weekDays) 
{
    return $weekDays['lt'][date('N')];
};
print_r($today());
echo '<br><br>';

// Sukurkite kintamuosius lang (reikšmės lt arba en) ir parodykite dieną

$langEN = 'en';
$langLT = 'lt';

$todayWithLang = function($lang) use($weekDays)
{
    if($lang == 'en')
    {
        return $weekDays['en'][date('N')];
    } else 
    {
        return $weekDays['lt'][date('N')];
    }
};

print_r($todayWithLang($langLT));

?>
</pre>