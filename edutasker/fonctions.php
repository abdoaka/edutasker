<?php
    function redirection($url)
    {
        if (headers_sent())
            print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
        else
            header("Location: $url");
    }
?>
