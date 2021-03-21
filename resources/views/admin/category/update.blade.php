@extends('admin.layout.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bootcamp</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Bootcamp</li>
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
                            <h3> Bootcamp </h3>
                            <a href="{{ route('admin.bootcamps.index') }}" class="btn btn-primary set-button"
                                title="Back to Slider"> Back </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.bootcamps.update', ['bootcamp' => $model->id]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input id="title" type="text"
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    name="name" value="{{ $model->name }}" placeholder="Enter Title"
                                                    autofocus>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
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
                                                <input id="icon_class" type="text"
                                                    class="form-control{{ $errors->has('icon_class') ? ' is-invalid' : '' }}"
                                                    name="icon_class" value="{{ $model->icon_class }}"
                                                    placeholder="Enter icon class" autofocus>
                                                @if ($errors->has('icon_class'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('icon_class') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="link_to" type="text"
                                                    class="form-control{{ $errors->has('link_to') ? ' is-invalid' : '' }}"
                                                    name="link_to" value="{{ $model->link_to }}"
                                                    placeholder="Enter URL" autofocus>
                                                @if ($errors->has('link_to'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('link_to') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="link_title" type="text"
                                                    class="form-control{{ $errors->has('link_title') ? ' is-invalid' : '' }}"
                                                    name="link_title" value="{{ $model->link_title }}"
                                                    placeholder="Enter URL Text" autofocus>
                                                @if ($errors->has('link_title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('link_title') }}</strong>
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
                                            <a href="{{ route('admin.bootcamps.index') }}"
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
