<?php /** @noinspection SqlNoDataSourceInspection */

// Fast-fail: this API endpoint only supports POST method.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        "success" => false,
        "message" => "Only support POST method."
    ]);
    exit;
}

/**
 * Define all the database connection parameters. You should read the following
 * comments carefully:
 *
 * Before running this script, you should have already started the MySQL service
 * in XAMPP, which listens on port 3306. Now, we want to connect to the MySQL
 * service in the PHP script.
 *
 * The host name is "localhost", which will map to the loopback IP address,
 *
 *     127.0.0.1,
 *
 * by your operating system. This special IP address points to your own machine.
 *
 * MySQL has a default user `root` with empty password. If you don't do any
 * extra configuration (which you shouldn't do in this course), you can connect
 * to the database with the following username and password. However, never do
 * this in a real project or production environment!
 *
 * The database name is `movie`, which was created in phpMyAdmin.
 */
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'movie';

// Here, `mysqli` is a PHP built-in class that manages a MySQL database
// connection. The `new` keyword creates an instance, just like in Java and C++.
$mysqli = new mysqli(
    $databaseHost,
    $databaseUsername,
    $databasePassword,
    $databaseName
);

// Get POST data (also known as body parameters) from the incoming HTTP request.
// Fast-fail if year is empty (null or empty string).
$year = $_POST['year'];
if (empty($year)) {
    echo json_encode([
        "success" => false,
        "message" => "Year must not be empty."
    ]);
    exit;
}

// Fetch movie records whose year is the same as the given one.
$getMoviesStatement = "SELECT * FROM movies WHERE year = '$year'";

// Send the query to the database and get a result set.
$resultSet = $mysqli->query($getMoviesStatement);

// Get the next record in the result set. If the result set is empty (happens
// when no rows are fetched), $movie will be null.
$movie = mysqli_fetch_array($resultSet);

// If no movie is fetched, immediate returns a failure response. Note that the
// response body is a JSON string. The JSON object contains one entry, whose key
// is "success" and value is `false`.
if (empty($movie)) {
    $response = [
        "success" => false,
        "message" => "No movies found."
    ];
    echo(json_encode($response));
    exit;
}

// For a successful response, we return a JSON object containing all the
// information about the fetched movie record.
$response = [
    "success" => true,
    "title" => $movie['title'],
    "year" => $movie['year'],
    "length" => $movie['length'],
    "genre" => $movie['genre'],
];
echo json_encode($response);

// Test this script with the following command on Unix systems:
//
//     curl -i -X POST http://localhost/demo/migration.php -d "year=1977"
//