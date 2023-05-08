<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($id){
//        dd($id);
        $material=Materials::query()->find($id);
//        dd($material);
        $file=$material->path;
//        dd($material->full_mime);
//        $headers=array(
//            'Content-Description' => 'File Transfer',
//            "Content_Type: $material->full_mime",
//        ) ;
        $download=Storage::download("$file");
//        ob_end_clean();
        return $download;
    }
}
