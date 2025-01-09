<?php
$downloaded = false;
if ($_POST && $_POST['url']) {
    $url = $_POST['url'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    file_put_contents('downloaded.jpg', $response);
    $downloaded = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download a file</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    <h1>Download file using curl</h1>
    <h2>
        <?php 
        if ($downloaded) {
            echo 'File downloaded successfully';
        }
        ?>
    </h2>
    <form action="download.php" method="POST">
        <label for="url">URL:</label>
        <input type="text" name="url" id="url" required>
        <button type="submit">Download</button>
    </form>
    <div>
        <?php 
        if ($downloaded) {
            echo '<img width="300" height="auto" src="downloaded.jpg" alt="Downloaded file">';
        }
        ?>
    </div>
</body>

</html>