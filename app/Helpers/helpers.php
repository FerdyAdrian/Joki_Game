<?php

if (!function_exists('secure_form_action')) {
    function secure_form_action($path)
    {
        return url($path, [], true); // true = force https
    }
}
