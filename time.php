<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 5/21/18
 * Time: 8:47 AM
 */

?>

<head>

    <link rel="stylesheet" type="text/css" href="custom.css"/>
    <link rel="stylesheet" type="text/css" href="jQuery-countdownTimer/src/css/jQuery.countdownTimer.css">
    <script src="python/editor/jquery.min.js"></script>
    <script src="python/editor/query-ui.min.js"></script>
    <script src="jQuery-countdownTimer/src/js/jQuery.countdownTimer.js"></script>
</head>
<span id="hms_timer"></span>

<script>
    $('#hms_timer').countdowntimer({
        hours : 0,
        minutes : 0,
        seconds : 20,
        size : 'lg',
        expiryUrl: "answer.php"
    })
</script>
