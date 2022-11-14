<?php

namespace App\Faker;

use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class FakerImageProvider extends Base
{
    public function loremflickr(string $dir = '', int $width = 500, int $height = 500): string
    {
        $name = Str::random(6) . '.jpg';

        $path = 'public/' . $dir . '/' . $name;

        Storage::put(
            $path,
            file_get_contents("https://loremflickr.com/$width/$height")
        );

        return $name;
    }
}
