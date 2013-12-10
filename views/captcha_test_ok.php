<?php defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Captcha Test - OK</title>
</head>
<body>

<?php

if (!isset($confirmation_message)) {
    $confirmation_message = '';
}

if ($confirmation_message != '') {

?>

    <div style="margin-bottom: 20px;">

        <?php echo $confirmation_message; ?>

    </div>

<?php
}

?>

    <div style="margin-bottom: 20px;">

        <a href="<?php echo site_url('captcha_test') ?>">Back to the captcha text</a>

    </div>

</body>
</html>
