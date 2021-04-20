<?php
if(! function_exists('get_input_type')) {

    function get_input_type($setting) {
        switch($setting->type) {
            case "text":
                $type = "<input type='text' class='form-control' name=$setting->name value=$setting->value>";
            break;

            case "image":
                $type = "<input type='file' class='form-control' name=$setting->name>";
            break;

            case "textarea":
                $type = "<textarea class='form-control' rows='4' name=$setting->name>$setting->value</textarea>";
            break;

            default:
                $type = "<input type='text' class='form-control' name=$setting->name value=$setting->value>";
        }
        return $type;
    }

}
