<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    // public function getImages($folder)
    // {
    //     $path = public_path('historical-seasons-images/' . $folder);

    //     if (!File::exists($path)) {
    //         return response()->json([]);
    //     }

    //     $files = File::files($path);

    //     $images = [];
    //     $index = 1;

    //     foreach ($files as $file) {
    //         $ext = strtolower($file->getExtension());

    //         $isVideo = in_array($ext, ['mp4', 'webm', 'ogg']);
    //         $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif']);

    //         if (!$isImage && !$isVideo) continue;

    //         $images[] = [
    //             'id'    => $index++,
    //             'type'  => $isVideo ? 'video' : 'photo',
    //             'src'   => asset("public/historical-seasons-images/$folder/" . $file->getFilename()),
    //             'thumb' => $isVideo
    //                 ? asset('public/historical-seasons-images/video-thumb.png')
    //                 : asset("public/historical-seasons-images/$folder/" . $file->getFilename()),
    //             'name'  => $file->getFilename(),
    //         ];
    //     }

    //     return response()->json($images);
    // }

    public function getImages($folder)
    {
        $path = public_path('historical-seasons-images/' . $folder);

        if (!File::exists($path)) {
            return response()->json([]);
        }

        $files = File::files($path);

        $images = [];
        $index = 1;

        foreach ($files as $file) {

            $ext = strtolower($file->getExtension());

            $isVideo = in_array($ext, ['mp4', 'webm', 'ogg']);
            $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif']);

            if (!$isImage && !$isVideo) continue;

            $images[] = [
                'id' => $index++,
                'type' => $isVideo ? 'video' : 'photo',
                'src' => asset("public/historical-seasons-images/$folder/" . $file->getFilename()),
                'thumb' => $isVideo
                    ? asset('public/historical-seasons-images/video-thumb.png')
                    : asset("public/historical-seasons-images/$folder/" . $file->getFilename()),
                'name' => $file->getFilename(),
            ];
        }

        /* YouTube */
        $youtubeFile = $path . '/youtube-links.txt';

        if (File::exists($youtubeFile)) {

            $lines = file($youtubeFile, FILE_IGNORE_NEW_LINES);

            foreach ($lines as $line) {

                $line = html_entity_decode(trim($line));

                if (!$line) continue;

                if (preg_match('/src="([^"]+)"/', $line, $match)) {
                    $line = $match[1];
                }


                if (str_contains($line, 'watch?v=')) {

                    parse_str(parse_url($line, PHP_URL_QUERY), $query);

                    if (isset($query['v'])) {
                        $line = "https://www.youtube.com/embed/" . $query['v'];
                    }
                }

                $line = strtok($line, '?');
                
                $videoId = null;

                if (preg_match('/youtube\.com\/embed\/([^?]+)/', $line, $match)) {
                    $videoId = $match[1];
                }

                $thumb = $videoId
                    ? "https://img.youtube.com/vi/$videoId/hqdefault.jpg"
                    : asset('public/historical-seasons-images/video-thumb.png');

                $images[] = [
                    'id' => $index++,
                    'type' => 'youtube',
                    'src' => $line,
                    'thumb' => $thumb,
                    'name' => 'YouTube Video'
                ];
            }
        }

        return response()->json($images);
    }

    public function notAvailable()
    {
        return view('imagesNotAvailable');
    }
}
