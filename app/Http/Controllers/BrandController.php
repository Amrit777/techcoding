<?php

namespace App\Http\Controllers;

use App\Media;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Brand::select(['id', 'title', 'description', 'created_at']);
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a type="button" name="edit" href="' . route('admin.brand.edit', $row->id) . '" class="edit btn btn-primary btn-sm badge bg-primary">Edit</a>';
                    $btn .= '&nbsp;&nbsp;<a type="button" name="edit" id="Recod_delete_' . $row->id . '" class="delete btn btn-danger btn-sm badge bg-danger" data-route="' . route('admin.brand.destroy', ['brand' => $row->id]) . '" data-id="' . $row->id . '">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.brand.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
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

        // try {
            // DB::beginTransaction();
            $brand = Brand::create([
                'title' => $request->title,
                'description' => $request->description,
                'createdby_id' => Auth::user()->id,
                'link_to' =>  $request->link_to,
                'link_title' =>  $request->link_title,
                'state_id' => '1',
                'slug' => Str::slug($request->title)
            ]);
            Media::saveImage($request->file()['image'], $brand, 'brand-images');

            $response = 'success';
            $msg = 'Brand saved';
            // DB::commit();
        // } catch (\Exception $exception) {
        //     DB::rollBack();
        //     $msg = $exception->getMessage();
        // }
        return redirect()->route('admin.brand.index')->with($response, $msg);
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
        $model = Brand::findOrFail($id);
        $media = Media::where("model_id", $id)->where('model_type', get_class($model))->first();
        return view('admin.brand.update', compact('model', 'media'));
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

        $model = Brand::findOrFail($id);
        $model->title =  $request->get('title');
        $model->description = $request->get('description');
        $model->link_to =  $request->get('link_to');
        $model->link_title = $request->get('link_title');

        if (!empty($request->file())) {
            Media::updateImage($request->file()['image'], $model, 'brand-images');
        }
        $model->save();
        return redirect()->route('admin.brand.index')->with('success', 'Brand updated!');
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
