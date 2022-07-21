<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('uploadImageStoragePublic')) {
    function uploadImageStoragePublic($image, $foldername)
    {
        $uploadpath = strtolower($foldername . '/');

        if ($image !== '') {
            $disk = Storage::disk('public');

            $file_extension = $image->getClientOriginalExtension();

            $filename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            $path = $uploadpath . substr(md5(mt_rand()), 0, 7) . $filename . '-' . time() . '.' . $file_extension;
            $disk->put($path, file_get_contents($image->getRealPath()));
            return $path;
        }
        return '';
    }
}

if (! function_exists('deleteStorageFile')) {
    function deleteStorageFile($img)
    {
        if (File::exists(storage_path('app/public/' . $img))) {
            File::delete(storage_path('app/public/' . $img));
        }
    }
}

if (! function_exists('getFilename')) {
    function getFilename(string $file_path)
    {
        $path = parse_url($file_path);
        return str_replace('storage/', '', $path['path']);
    }
}
