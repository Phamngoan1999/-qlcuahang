<?php

namespace App\Traits;
use Intervention\Image\Facades\Image;

trait HandleImage
{
    protected $path = 'uploads/images/';

    protected $imageDefault = 'avarta.jpg';


    public function verifyImage($request)
    {
        return $request->file('files_anh_giay_to');
    }

    public function storeImage($request)
    {
        $fileName = time() . $request->getClientOriginalName();
        $saveLocation = $this->path . $fileName;
        $image = Image::make($request);
        $image->resize(250, 250)->save($saveLocation);
        return $fileName;
    }

    public function storeImageAvata($request)
    {
        if(!empty($request->file('files_avata_xe')))
        {
            $file = $request->file('files_avata_xe');
            $fileName = time() . $file->getClientOriginalName();
            $saveLocation = $this->path . $fileName;
            $image = Image::make($file);
            $image->fit(150, 150)->save($saveLocation);
            return $fileName;
        }
        return $this->imageDefault;
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
