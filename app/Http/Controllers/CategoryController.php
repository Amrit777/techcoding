<?php

namespace App\Http\Controllers;

use App\Media;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::select(['id', 'name', 'description', 'created_at']);
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a type="button" name="edit" href="' . route('admin.bootcamps.edit', $row->id) . '" class="edit btn btn-primary btn-sm badge bg-primary">Edit</a>';
                    $btn .= '&nbsp;&nbsp;<a type="button" name="edit" id="Recod_delete_' . $row->id . '" class="delete btn btn-danger btn-sm badge bg-danger" data-route="' . route('admin.bootcamps.destroy', ['bootcamp' => $row->id]) . '" data-id="' . $row->id . '">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'icon_class' => 'required'
        ]);
        $response  = 'error';
        $msg = 'Something went wrong';

        // try {
        // DB::beginTransaction();
        $model = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'icon_class' => $request->icon_class,
            'createdby_id' => Auth::user()->id,
            'state_id' => '1',
            'slug' => Str::slug($request->name),
            'link_to' => $request->link_to,
            'link_title' => $request->link_title,
        ]);
        Media::saveImage($request->file()['image'], $model, 'category-images');

        $response = 'success';
        $msg = 'Bootcamp saved';
        // DB::commit();
        // } catch (\Exception $exception) {
        //     DB::rollBack();
        //     $msg = $exception->getMessage();
        // }
        // die("emded");
        return redirect()->route('admin.bootcamps.index')->with($response, $msg);
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
        $model = Category::findOrFail($id);
        $media = Media::where("model_id", $id)->where('model_type', get_class($model))->first();
        return view('admin.category.update', compact('model', 'media'));
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
            'name' => 'required',
            'description' => 'required'
        ]);

        $model = Category::findOrFail($id);
        $model->name =  $request->get('name');
        $model->description = $request->get('description');
        $model->link_to =  $request->get('link_to');
        $model->link_title = $request->get('link_title');

        if (!empty($request->file())) {
            Media::updateImage($request->file()['image'], $model, 'category-images');
        }
        $model->save();
        // print_r($model);
        // exit;
        return redirect()->route('admin.bootcamps.index')->with('success', 'Bootcamps updated!');
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
