<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2013
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Captcha Test</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>

    <h3>Captcha Test</h3>

    <?php echo form_open('', 'name="captcha_form" id="captcha_form" method="post"'); ?>

<?php

if (isset($error_message) && $error_message != '') {

?>
        <div style="margin-bottom: 20px;">

            <?php echo $error_message; ?>

        </div>
<?php

}

?>

        <div>

            <div style="margin-bottom: 20px;">

                <img id="captcha_image"
                    src="<?php echo $this->captcha->src.'?nocache='.rand(100000000, 999999999); ?>"
                    style="cursor: pointer;"
                    title="Click on the image if you are not able to read the proposed text."
                />

            </div>

            <div style="margin-bottom: 20px;">

                <label>Enter the text shown in the image:</label>
                <br />
                <input type="text" placeholder="Type here..." name="captcha" id="captcha" value="" maxlength="<?php echo $this->captcha->length; ?>" />

            </div>

            <div style="margin-bottom: 20px;">

                <button type="submit">Submit</button>

            </div>

        </div>

    <?php echo form_close(); ?>


    <script type="text/javascript">
    //<![CDATA[

    function refresh_captcha(captcha_img) {
        captcha_img.src = '<?php echo $this->captcha->src; ?>' + '?nocache=' + Math.random()*999999999;
    }

    $(function () {

        $('#captcha_image').on('click', function() {
            refresh_captcha(this);
        });

    });

    //]]>
    </script>

</body>
</html>
