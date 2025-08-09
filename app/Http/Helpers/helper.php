<?php

if (!function_exists('getProfileImg')) {
    function getProfileImg($name) {
        return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
    }

}
if (!function_exists('breadcrumb')) {
    function breadcrumb() {
        $url = request()->url();
        // $baseUrl = env('APP_URL') . '/backend/';
        $path = str($url)->explode('/backend/')->toArray();
        echo str()->headline($path[1]) ?? 'Unknown';
    }

}
if (!function_exists('genaral_status')) {
    function genaral_status($status, $route="#") {
        if ($status == 1) {
            echo'<a
            href="'.$route.'" class="btn btn-elevated-rounded-primary btn-success w-24 d-inline-block me-1 mb-2">Active</a>';
        } elseif ($status == 0) {
            echo'<a
            href="'.$route.'" class="btn btn-elevated-rounded-primary btn-danger w-24 d-inline-block me-1 mb-2">Inactive</a>';
        } else {
            echo '<a
            href"'.$route.'" class="btn btn-elevated-rounded-primary btn-warning w-24 d-inline-block me-1 mb-2">Pending</a>';
        }
    }
}
if (!function_exists('stock_status')) {
    function stock_status($status, $route="#") {
        if ($status == 1) {
            echo'<a
            href="'.$route.'" class="btn btn-elevated-rounded-primary btn-success w-24 d-inline-block me-1 mb-2">In Stock</a>';
        } elseif ($status == 0) {
            echo'<a
            href="'.$route.'" class="btn btn-elevated-rounded-primary btn-danger w-24 d-inline-block me-1 mb-2">Out of Stock</a>';
        } else {
            echo '<a
            href"'.$route.'" class="btn btn-elevated-rounded-primary btn-warning w-24 d-inline-block me-1 mb-2">Pending</a>';
        }
    }
}





if (!function_exists('title_imge')) {
    function title_imge($src) {
        if ($src && file_exists(public_path('storage/'.$src))) {
            return asset('storage/'.$src);
        } else {
            return asset('frontend/img/placeholder.jpg');
        }
    }
}
