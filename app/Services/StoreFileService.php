<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class StoreFileService {
    public function save_image($file, $book = null) {
        if ($file) {
            $path = $file->store('uploads', 'public');
        } else {
            isset($book) ? $path = $book->image : $path = null;
        }
        return $path;
    }
}
