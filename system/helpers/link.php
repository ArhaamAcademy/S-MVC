<?php

    function linkCss($cssPath){

        $url = BASEURL . "/" .$cssPath;
        echo '<link rel="stylesheet" href="'. $url .'">';

    }

    function linkJs($jsPath){

        $url = BASEURL . "/" .$jsPath;
        echo '<script src="'. $url .'"></script>';

    }

?>