<?php
// phpinfo();
echo "<pre>";
// var_dump($_SERVER["HTTP_ACCEPT"]);
// var_dump(getenv('PHP_ENV'), $_SERVER, $_REQUEST);
// var_dump($_SERVER['REQUEST_METHOD']);
// echo '<hr>';
// var_dump($_SERVER['REQUEST_URI']);
$requestUrl = $_SERVER['REQUEST_URL'] ?? '/ ';
$requestMethode = $_SERVER['REQUEST_METHOD'] ?? 'GET';
// echo "<br>Request url is: ".$requestUrl;
// echo "Request method is: ".$requestMethode;
echo "<h3>Home page</h3>";
if($requestMethode === 'GET' && $requestUrl ==='/'){
    echo "Hello, your url addresse is correct";
} else {
    // require_once('404.php');
    header('Location: 404.php');
    exit();
    // header('Location: http://www.example.com/');
}

echo "</pre>";



