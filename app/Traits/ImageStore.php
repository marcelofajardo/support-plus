<?php

namespace App\Traits;


use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


trait ImageStore
{
    public function saveImage($image, $height = null, $weight = null)
    {
        if (isset($image)) {
            $current_date = Carbon::now()->format('d-m-Y');

            if (!File::isDirectory('public/uploads/images/' . $current_date)) {
                File::makeDirectory('public/uploads/images/' . $current_date, 0777, true, true);
            }

            try {
                $ext = str_replace('image/', '', Image::make($image)->mime());
                if ($height != null && $weight != null) {
                    $img = Image::make($image)->resize($height, $weight, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                } else {
                    $img = Image::make($image);
                }
                $img_name = 'public/uploads/images/' . $current_date . '/' . uniqid() . '.' . $ext;
                $img->save($img_name);
            } catch (Exception $e) {
                $fileName1 = md5(rand(0, 9999) . '_' . time()) . '.' . $image->clientExtension();
                $img_name = 'public/uploads/images/' . $fileName1;
                $image->move(public_path('uploads/images'), $fileName1);
            }

            return $img_name;
        } else {
            return null;
        }
    }
}
