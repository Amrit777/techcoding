<?php

namespace App\Http\Helper;

use App\EmailTemplate;
use App\EmailTemplateTag;
use App\Constant\Constants;
use App\Jobs\SendMailJob;
use Illuminate\Support\Facades\Queue;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\File;

class Helper
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function userType($roleId)
    {
        if ($roleId == 0) {
            $type = 'Admin';
        } else {
            $type = 'SubAdmin';
        }
        return $type;
    }

    public static function saveImage($image, $foldername, $userid = null)
    {

        $imageExtension = $image->getClientOriginalExtension();
        $imageName = $image->getClientOriginalName();
        $imageName = pathinfo($imageName);
        $imageNameWE = preg_replace('/\s+/', '_', $imageName['filename']);
        $imageName = $imageNameWE . '.' . $imageExtension;

        $first = 1;
        $separator = '-';
        $userpath = '';
        //     dd($imageName);
        if ($userid) {
            $userpath = '/' . $userid;
        }

        while (file_exists(storage_path() . '/app/public/' . $foldername . $userpath . '/' . $imageName)) {

            preg_match('/(.+)' . $separator . '([0-9]+)$/', $imageName, $match);

            $imageName = isset($match[2]) ? $match[1] . $separator . ($match[2] + 1) : $imageNameWE . $separator . $first;
            $first++;
            $imageName = $imageName . '.' . $imageExtension;
        }

        $imagepath = storage_path() . '/app/public/' . $foldername . '/' . $userid;

        $image->move($imagepath, $imageName);

        $return_path = '/' . $foldername . $userpath . '/' . $imageName;
        return $return_path;
    }

    public static function storagePath($image)
    {
        return storage_path() . '/app/public/' . $image;
    }

    public static function public_path($path = '')
    {
        return env('PUBLIC_PATH', base_path('public')) . ($path ? '/' . $path : $path);
    }

    /**
     * Generate a random password string
     *
     * @param int $len
     * @return string
     */
    public static function randomPassword($len = 8)
    {

        // enforce min length 8
        if ($len < 8) {
            $len = 8;
        }

        // define character libraries - remove ambiguous characters like iIl|1 0oO
        $sets = array();
        $sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
        $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        $sets[] = '23456789';
        $sets[] = '@#$%';

        $password = '';

        // append a character from each set - gets first 4 characters
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
        }

        // use all characters to fill up to $len
        while (strlen($password) < $len) {
            // get a random set
            $randomSet = $sets[array_rand($sets)];

            // add a random char from the random set
            $password .= $randomSet[array_rand(str_split($randomSet))];
        }

        // shuffle the password string before returning!
        return str_shuffle($password);
    }
}
