<?php
setcookie($_GET["cookie_name"], $_GET["cookie_value"], time()+($_GET["cookie_time"] ? intval($_GET["cookie_time"]) : 86400));
?>