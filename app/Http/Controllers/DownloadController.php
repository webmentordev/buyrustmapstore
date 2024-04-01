<?php

namespace App\Http\Controllers;

use App\Models\FreeMap;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($checkout){
        $map = Purchase::where('checkout_id', $checkout)->first();
        if($map){
            if($map->downloads <= 5){
                $map->downloads = $map->downloads + 1;
                $map->save();
                $originalFilePath = Storage::disk('local')->path($map->map->file);
                $newFileName = str_replace(' ', '-', strtolower($map->map->name)).'-'.'buyrustmaps-store-'.$map->map->size.'-'.rand(99, 9999999).'-'.date("d-m-y").'.zip';
                $headers = [
                    'Content-Type' => 'application/zip',
                    'Content-Disposition' => 'attachment; filename="' . $newFileName . '"',
                ];
                return response()->file($originalFilePath, $headers);
            }else{
                abort(429);
            }
        }else{
            abort(404);
        }
    }


    public function free_download($slug){
        $map = FreeMap::where('slug', $slug)->first();
        if($map){
            $originalFilePath = Storage::disk('local')->path($map->file);
            $newFileName = str_replace(' ', '-', strtolower($map->name)).'-'.'buyrustmaps-store-'.$map->size.'-'.rand(99, 9999999).'-'.date("d-m-y").'.zip';
            $headers = [
                'Content-Type' => 'application/zip',
                'Content-Disposition' => 'attachment; filename="' . $newFileName . '"',
            ];
            return response()->file($originalFilePath, $headers);
        }else{
            abort(404);
        }
    }
}