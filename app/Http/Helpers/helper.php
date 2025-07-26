<?php

if (!function_exists('getProfileImg')) {
    function getProfileImg($name) {
        return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
    }
    
}
if (!function_exists('breadcrumb')) {
    function breadcrumb() {
        $url = request()->url();
        $baseUrl = env('APP_URL') . '/backend/';
        // dd($baseUrl);
        $path = str($url)->explode($baseUrl);
        // dd($path);
        echo $path[1] ?? '';
        // return $path[1] ?? '';
    }
}