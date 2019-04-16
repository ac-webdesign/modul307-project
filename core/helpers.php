<?php
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

/**
 * Hollt alle Werkzeuge mit der bestimmten ID aus DB
 */
function getToolById(int $id)
{
    $db = connectToDatabase();
    $getByIdStatement = $db->prepare('SELECT * FROM `tools` WHERE id = :id ');
    $getByIdStatement->bindParam(':id', $id);
    $getByIdStatement->execute();
    return $getByIdStatement->fetch();
}

/**
 * Hollt alle Werkzeuge mit den bestimmten Namen aus DB
 */
function getToolByName($name)
{
    $db = connectToDatabase();
    $getByNameStatement = $db->prepare('SELECT * FROM `tools` WHERE name = :name ');
    $getByNameStatement->bindParam(':name', $name);
    $getByNameStatement->execute();
    return $getByNameStatement->fetch();
}

/**
 * Hollt alle Urgents aus DB
 */
function getUrgentDays(string $urgent)
{
    // Urgents Array mit einzelne Urgent-Array
    $urgents = [
        'urgent1' => array(
            'name' => 'sehr tief',
            'days' => 25,
        ),
        'urgent2' => array(
            'name' => 'tief',
            'days' => 20,
        ),
        'urgent3' => array(
            'name' => 'normal',
            'days' => 15,
        ),
        'urgent4' => array(
            'name' => 'hoch',
            'days' => 10,
        ),
        'urgent5' => array(
            'name' => 'sehr hoch',
            'days' => 5,
        ),
    ];

    foreach ($urgents as $ur => $u) {
        if ($u['name'] === $urgent) {
            return $u['days'];
        }
    }
}

/**
 * Enddatum berechnen
 */
function generateEndDate($repair)
{
    return date('d.m.y', strtotime($repair['startdate'] . " + " . $repair['urgent'] . " days"));
}
