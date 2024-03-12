<?php

use App\Models\Artikel;
// use App\Models\section;



// function get_artikel_values($key)
// {
//     $data = section::where('key', $key)->first();
//     if (isset($data->value)) {
//         return $data->value;
//     } else {
//         return 'empty';
//     }
// }
function get_artikel_values($key)
{
    $data = Artikel::where('content', $key)->first();
    if (isset($data)) {
        return $data;
    }
}
