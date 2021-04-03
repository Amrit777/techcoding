<?php

namespace App;

use App\Http\Helper\Helper;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = "media";


    public static function saveImage($image, $model, $folder = '/', $alt = '')
    {
        $imageExtension = $image->getClientOriginalExtension();
        $imageName = $image->getClientOriginalName();
        $imageName = pathinfo($imageName);
        $imageNameWE = preg_replace('/\s+/', '_', $imageName['filename']);
        $imageName = $imageNameWE . '.' . $imageExtension;
        // /////////////////////////////
        $media = new Media();
        $media->model_id = $model->id;
        $media->alt = $alt;
        $media->filename = $imageName;
        $media->model_type = get_class($model);
        $path = Helper::saveImage($image, 'uploads/' . $folder, $model->id);

        $media->original_name = $path;
        $media->status = 1;
        $media->size = 1;
        $media->thumbfile = $path;
        $media->extension = $imageExtension;
        $media->save();
        return $model;
    }

    public static function updateImage($image, $user, $folder = '/')
    {
        $media = self::where("model_id", $user->id)->where("model_type", get_class($user))->first();
        if (!empty($media)) {
            if (file_exists(storage_path() . '/app/public/' . $media->original_name)) {

                unlink(storage_path() . '/app/public/' . $media->original_name);
            }

            $media->delete();
        }
        self::saveImage($image, $user, $folder);
    }


    public function getHtmlofImageTag($arr)
    {
        return '<a id="looop_modal_' . $this->id . '" data-id="' . $this->id . '"  data-keyword="' . $this->size . '"   data-alt="' . $this->alt . '">
                 <img src="' . env("APP_URL") . "/storage/app/public" . $this->original_name . '" id="media_' . $this->id . '" style="width: 200px">
                </a>';
    }

    public function getUrl()
    {
        if (isset($this->original_name)) {

            return asset('/storage') . $this->original_name;
        }

        return '';
    }
}
