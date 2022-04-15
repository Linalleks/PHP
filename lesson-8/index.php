<?php
    if (isset($_POST['subject'])):
        $to = 'wewif73592@whwow.com';
        $subject = $_POST['subject'] ?? '';
        $message = $_POST['message'] ?? '';

        $header[] = 'MIME-Verson: 1.0';
        $header[] = 'Content-Type: text/html; charset=utf-8';
        // $header[] = 'Content-Type: text/plain; charset=utf-8';
        $header[] = 'From: No reply <noreply@' . $_SERVER['HTTP_HOST'] . '>';
        var_dump($_POST);
        // mail($to, $subject, $message, implode("\r\n", $header));
    endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php for ($i = 1; $i < 5; $i++): 
        echo "<li>$i</li>";
    endfor; ?>
    </ul>
    <?php if (!isset($_POST['subject'])): ?>
    <form action="" method="post">
        <input type="text" name="subject"><br><br>
        <textarea name="message" cols="30" rows="10"></textarea><br><br>
        <input type="submit">
    </form>
    <?php endif; ?>
</body>
</html>