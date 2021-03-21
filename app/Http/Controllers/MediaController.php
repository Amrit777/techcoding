<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    public function delete_media(Request $request)
    {

        $media = Media::findOrFail($request->key);
        $media->delete();
        return response()->json(['message' => "Successfully deleted"], 200);
    }

    public function mediaSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()[0]], 400);
        }
        $media = Media::where('id', $request->id)->first();
        $media->alt = $request->alt;
        $media->size = $request->keyword;
        $media->save();
        return response()->json(
            [
                'message' => true,
                'id' => $media->id,
                'key' => $media->size,
                'alt' => $media->alt
            ],
            200
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
