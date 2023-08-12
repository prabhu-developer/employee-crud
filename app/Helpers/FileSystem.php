<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

trait FileSystem
{
    public function putFiles($file)
    {
       return Storage::put('avatar', $file); 
    }
}