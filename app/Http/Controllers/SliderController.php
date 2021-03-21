<?php

namespace App\Http\Controllers;

use App\Media;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Slider::select(['id', 'title', 'description', 'created_at']);
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a type="button" name="edit" href="' . route('admin.sliders.edit', $row->id) . '" class="edit btn btn-primary btn-sm badge bg-primary">Edit</a>';
                    $btn .= '&nbsp;&nbsp;<a type="button" name="edit" id="Recod_delete_' . $row->id . '" class="delete btn btn-danger btn-sm badge bg-danger" data-route="' . route('admin.sliders.destroy', ['slider' => $row->id]) . '" data-id="' . $row->id . '">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.sliders.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $response  = 'error';
        $msg = 'Something went wrong';

        try {
            DB::beginTransaction();
            $slider = Slider::create([
                'title' => $request->title,
                'description' => $request->description,
                'createdby_id' => Auth::user()->id,
                'link_to' =>  $request->link_to,
                'link_title' =>  $request->link_title,
                'state_id' => '1',
                'slug' => Str::slug($request->title)
            ]);
            Media::saveImage($request->file()['image'], $slider, 'sliders-images');
            
            $response = 'success';
            $msg = 'Slider saved';
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            $msg = $exception->getMessage();
        }
        return redirect()->route('admin.sliders.index')->with($response, $msg);
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
        $model = Slider::findOrFail($id);
        $media = Media::where("model_id", $id)->where('model_type', get_class($model))->first();
        return view('admin.sliders.update', compact('model', 'media'));
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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link_title' => 'required',
            'link_to' => 'required'
        ]);

        $model = Slider::findOrFail($id);
        $model->title =  $request->get('title');
        $model->description = $request->get('description');
        $model->link_to =  $request->get('link_to');
        $model->link_title = $request->get('link_title');

        if (!empty($request->file())) {
            Media::updateImage($request->file()['image'], $model);
        }
        $model->save();
        return redirect()->route('admin.sliders.index')->with('success', 'Slider updated!');
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
