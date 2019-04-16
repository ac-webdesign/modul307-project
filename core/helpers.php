<?php
// TODO Validation
// Urgents Array mit einzelne Urgent-Array
$urgents = [
    'urgent1' => array(
        'name' => 'sehr tief',
        'number' => 25,
    ),
    'urgent2' => array(
        'name' => 'tief',
        'number' => 20,
    ),
    'urgent3' => array(
        'name' => 'normal',
        'number' => 15,
    ),
    'urgent4' => array(
        'name' => 'hoch',
        'number' => 10,
    ),
    'urgent5' => array(
        'name' => 'sehr hoch',
        'number' => 5,
    ),
];

/**
 * Nutze diese Funktion um einfach eine Ausgabe
 * mit htmlspecialchars() zu erstellen.
 *
 * @param  string $value
 *
 * @return string
 */
function catchHtmlSpecialChar(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}

/**
 * Nutze diese Funktion um auf einen POST-Wert
 * zuzugreifen.
 *
 * @param  string $value
 *
 * @return mixed
 */
function post(string $key, $default = '')
{
    return $_POST[$key] ?? $default;
}

/**
 * Hollt alle Werkzeuge aus DB
 */
function getAllTools()
{
    $db = connectToDatabase();
    $tools = $db->prepare('SELECT * FROM `tools`');
    $tools->execute();
    return $tools->fetchAll();
}

function getUrgentNumber(string $urgent)
{
    foreach ($urgents as $ur => $u) {
        if ($u['name'] === $urgent) {
            return $u['number'];
        }
    }
}