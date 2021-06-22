<?php
// phpinfo();// show all php informations
$requestUrl = $_SERVER['REQUEST_URL'] ?? '/';// The two quuestion mark means tha if the left side is NULL or.. .
// ...udefined then use the things on the right side.
$requestMethode = $_SERVER['REQUEST_METHOD'] ?? 'GET';
// echo "<br>Request url is: ".$requestUrl;
// echo "Request method is: ".$requestMethode;
echo "<h3>Home page</h3>";
echo "<h2>Welcome to whoosh site</h2>";

// Why using and but not && ?
// There are not deffernce between AND and && but using AND is good.
// Why using === but not == ?
// 
if($requestMethode === 'GET' and $requestUrl ==='/'){
// print creats a group of html elements
print '<!DOCTYPE html>
        <html lang=\"en\">
            <head>
                <meta charset=\"UTF-8\">
                <title>Document</title>
            </head>
            <body>
                <h4>Hello, your url addresse is correct</h4>
            </body>
        </html>';
} else {
    // require_once('404.php');
    // header('Location: includes/404.php');
    include(__DIR__.'/includes/404.php');
    // header('Location: http://www.example.com/');
    exit();
}

