<?php

namespace App\Http\Controllers;

use App\Media;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Course::select(['id', 'title', 'description', 'created_at']);
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a type="button" name="edit" href="' . route('admin.course.edit', $row->id) . '" class="edit btn btn-primary btn-sm badge bg-primary">Edit</a>';
                    $btn .= '&nbsp;&nbsp;<a type="button" name="edit" id="Recod_delete_' . $row->id . '" class="delete btn btn-danger btn-sm badge bg-danger" data-route="' . route('admin.course.destroy', ['course' => $row->id]) . '" data-id="' . $row->id . '">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.courses.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
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
            'image' => 'required',
        ]);
        $response  = 'error';
        $msg = 'Something went wrong';

        try {
            DB::beginTransaction();
            $model = Course::create([
                'title' => $request->title,
                'description' => $request->description,
                'createdby_id' => Auth::user()->id,
                'session' =>  $request->session,
                'price_per_session' =>  $request->price_per_session,
                'instructor_id' => $request->instructor_id,
                "keywords" => $request->keywords,
                'state_id' => '1',
                'slug' => Str::slug($request->title),
                'instruction_level_id' => $request->instruction_level_id
            ]);
            Media::saveImage($request->file()['image'], $model, 'course-images');

            $response = 'success';
            $msg = 'Course saved';
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            $msg = $exception->getMessage();
        }
        return redirect()->route('admin.course.index')->with($response, $msg);
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
        $model = Course::findOrFail($id);
        $media = Media::where("model_id", $id)->where('model_type', get_class($model))->first();
        return view('admin.courses.update', compact('model', 'media'));
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
            'session' => 'required',
            'instructor_id' => 'required'
        ]);

        $model = Course::findOrFail($id);
        $model->title =  $request->get('title');
        $model->description = $request->get('description');
        $model->session =  $request->get('session');
        $model->price_per_session = $request->get('price_per_session');
        $model->instructor_id = $request->get('instructor_id');
        $model->keywords = $request->get('keywords');
        $model->instruction_level_id = $request->get('instruction_level_id');

        if (!empty($request->file())) {
            Media::updateImage($request->file()['image'], $model);
        }
        $model->save();
        return redirect()->route('admin.course.index')->with('success', 'Course updated!');
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
