<?php

namespace App\Traits;
use Intervention\Image\Facades\Image;

trait HandleImage
{
    protected $path = 'uploads/images/';

    protected $imageDefault = 'defaul_image.jpg';

    public function verifyImage($request)
    {
        return $request->file('files_anh_giay_to');
    }

    public function storeImage($request)
    {
        $fileName = time() . $request->getClientOriginalName();
        $saveLocation = $this->path . $fileName;
        $image = Image::make($request);
        $image->fit(150, 150)->save($saveLocation);
        return $fileName;
    }

    public function updateImage($request, $currentImage)
    {
        if($this->verifyImage($request))
        {
            $this->deleteImage($currentImage);
            return $this->storeImage($request);
        }
        return $currentImage;
    }

    public function deleteImage($imageName)
    {
        $path = $this->path . $imageName;
        if(file_exists($path))
        {
            unlink($path);
        }
    }
}
