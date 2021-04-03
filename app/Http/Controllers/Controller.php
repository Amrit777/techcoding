<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Slider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const SUCCESS = 200;
    const FAILED = 400;
    const ERROR = 500;

    public function error($msg)
    {
        $response['status'] = false;
        $response['code'] = self::ERROR;
        $response['message'] = $msg;
        return response()->json($response,  self::ERROR);
    }

    public function failed($msg = [])
    {
        $response['status'] = false;
        $response['code'] = self::FAILED;
        if (is_array($msg)) {
            if (array_key_exists("errors", $msg)) {
                $response['errors'] = $msg['errors'];
                if (array_key_exists('message', $msg)) {
                    $response['message'] = $msg['message'];
                }
            }
        } else {
            $response['message'] = $msg;
        }
        return response()->json($response,  self::FAILED);
    }
    public function success($msg = [])
    {
        $response['status'] = true;
        $response['code'] = self::SUCCESS;
        if (is_array($msg)) {
            foreach ($msg as $key => $value) {
                $response[$key]  = $value;
            }
        } else {
            $response['message'] = $msg;
        }
        return response()->json($response,  self::SUCCESS);
    }

    //For Generating Unique Slug Our Custom function
    public function createSlug($class, $title, $id = 0, $col = null)
    {
        // Normalize the title
        $slug = Str::slug($title, "-");
        // $slug = str_slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($class, $slug, $id, $col);
        // If we haven't used it before then we are all good.
        if (!empty($col)) {
            if (!$allSlugs->contains($col, $slug)) {
                return $slug;
            }
        }
        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 20; $i++) {
            $newSlug = $slug . '-' . $i;
            if (!empty($col)) {
                if (!$allSlugs->contains($col, $slug)) {
                    return $slug;
                }
            }
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($class, $slug, $id = 0, $col = null)
    {
        if (!empty($col)) {
            return $class::select($col)->where($col, 'like', $slug . '%')
                ->where('id', '<>', $id)
                ->get();
        }
        return $class::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }

    public function frontendAdditionalDetails($class, $slug, $id = 0, $col = null)
    {
        if (!empty($col)) {
            return $class::select($col)->where($col, 'like', $slug . '%')
                ->where('id', '<>', $id)
                ->get();
        }
        return $class::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
