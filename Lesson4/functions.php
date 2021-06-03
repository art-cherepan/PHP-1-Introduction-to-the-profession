<?php
    function get_file_data($path_to_file)
    {
        if (is_readable($path_to_file)) {
            $data = file_get_contents($path_to_file);
            return explode(PHP_EOL, $data);
        }
        else {
            return false;
        }
    }

    function get_img_objects($path_to_file)
    {
        if (is_readable($path_to_file)) {
            return scandir($path_to_file);
        }
        else {
            return false;
        }
    }
?>