<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

trait FileSystem
{
    public function putFiles($file)
    {
        return Storage::put('avatar', $file);
    }

    public function deleteFiles($file)
    {
        if (!is_null($file) && Storage::exists($file)) {
            Storage::delete($file);
        }
        return true;
    }
}
