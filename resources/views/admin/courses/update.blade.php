@extends('admin.layout.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Course</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Course</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3> Course </h3>
                            <a href="{{ route('admin.course.index') }}" class="btn btn-primary set-button"
                                title="Back to Course"> Back </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.course.update', ['course' => $model->id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input id="title" type="text"
                                                    class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                    name="title" value="{{ $model->title }}" placeholder="Enter Title"
                                                    autofocus>
                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="input-group mb-3">
                                                <textarea id="description" type="text"
                                                    class="form-control ckeditor {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                    name="description" value="{{ $model->description }}"
                                                    placeholder="Enter Description">{{ $model->description }}</textarea>
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="session" type="text"
                                                    class="form-control{{ $errors->has('session') ? ' is-invalid' : '' }}"
                                                    name="session" value="{{ $model->session }}"
                                                    placeholder="Enter session" autofocus>
                                                @if ($errors->has('session'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('session') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="price_per_session" type="text"
                                                    class="form-control{{ $errors->has('price_per_session') ? ' is-invalid' : '' }}"
                                                    name="price_per_session" value="{{ $model->price_per_session }}"
                                                    placeholder="Enter price_per_session" autofocus>
                                                @if ($errors->has('price_per_session'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('price_per_session') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="instructor_id" type="text"
                                                    class="form-control{{ $errors->has('instructor_id') ? ' is-invalid' : '' }}"
                                                    name="instructor_id" value="{{ $model->instructor_id }}"
                                                    placeholder="Enter instructor_id" autofocus>
                                                @if ($errors->has('instructor_id'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('instructor_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="keywords" type="text"
                                                    class="form-control{{ $errors->has('keywords') ? ' is-invalid' : '' }}"
                                                    name="keywords" value="{{ $model->keywords }}"
                                                    placeholder="Enter keywords" autofocus>
                                                @if ($errors->has('keywords'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('keywords') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="instruction_level_id" type="text"
                                                    class="form-control{{ $errors->has('instruction_level_id') ? ' is-invalid' : '' }}"
                                                    name="instruction_level_id" value="{{ $model->instruction_level_id }}"
                                                    placeholder="Enter instruction_level_id" autofocus>
                                                @if ($errors->has('instruction_level_id'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('instruction_level_id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            
                                            <div class="">
                                                <input id="image" type="file"
                                                    data-src="{{ @$media ? $media->getUrl() : '' }}"
                                                    class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                                    name="image" value="{{ old('image') }}">

                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span> @endif

                                            </div>
                                        </div>

                                    </div><br />

                                    <div class="row">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-3">
                                            <a href="{{ route('admin.course.index') }}"
                                                class="btn btn-danger btn-block btn-flat">Cancel</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
@endsection
