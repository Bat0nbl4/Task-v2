<?php

namespace App\Services;

use App\Models\Log;
use Illuminate\Support\Facades\Storage;

class LogsService {
    public function store_log($object, $object_id, $data, $comment = null) {

        $text = '';
        $data += ['comment' => $comment];

        if (gettype($data) == 'array') {
            foreach ($data as $key => $value) {
                $text = $text . $key .': ' . $value . "\n";
            }
        } else {
            $text = $data;
        }

        Log::create(['object' => $object->value, 'object_id' => $object_id, 'log_info' => $text]);
    }
}
