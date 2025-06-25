<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;

class FileController extends Controller
{

    public function fileVideo($fileName)
    {
        $path = storage_path('app/public/video/' . $fileName);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => mime_content_type($path)
        ]);
    }
    public function fileThumbnail($fileName)
    {
        $path = storage_path('app/public/video/thumbnail/' . $fileName);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => mime_content_type($path)
        ]);
    }
    public function fileUser($fileName)
    {
        $path = storage_path('app/public/user/' . $fileName);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Access-Control-Allow-Origin' => '*',
            'Content-Type' => mime_content_type($path)
        ]);
    }
}
