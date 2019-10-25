<?php
namespace App\Attachment;

use App\Model\Defaut;
use Intervention\Image\ImageManager;

class DefautAttachment{

    const DIRECTORY = UPLOAD_PATH . DIRECTORY_SEPARATOR . 'defauts';

    public static function upload(Defaut $defaut)
    {
        $photo = $defaut->getPhoto();
        if (empty($photo)  || $defaut->shouldUpload() === false){
            return;
        }
        $directory = self::DIRECTORY;
        if(file_exists($directory) === false){
            mkdir($directory, 0777, true);
        }
        if (!empty($defaut->getOldPhoto())){
            $oldFile = $directory . DIRECTORY_SEPARATOR . $defaut->getOldPhoto();
            if(file_exists($oldFile)){
                unlink($oldFile);
            }
        }
        $filename = uniqid("", true) . '.jpg';
        $manager = new ImageManager(['driver' => 'gd']);
        $manager
            ->make($photo)
            ->resize(350, 250, function ($constraint){
                $constraint->aspectRatio();
            })
            ->save($directory . DIRECTORY_SEPARATOR . $filename);
        $defaut->setPhoto($filename);
    }

    public static function detach(Defaut $defaut)
    {
        if (!empty($defaut->getPhoto())){
            $file = self::DIRECTORY . DIRECTORY_SEPARATOR . $defaut->getPhoto();
            if(file_exists($file)){
                unlink($file);
            }
        }
    }
}