@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bootcamps</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Bootcamps</li>
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
                            <h3> Bootcamps </h3>
                            <a href="{{ route('admin.bootcamps.index') }}" class="btn btn-primary set-button"
                                title="Back to Slider"> Back </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.bootcamps.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input id="name" type="text"
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    name="name" value="{{ old('name') }}" placeholder="Enter Title"
                                                    autofocus>
                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span> @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <textarea id="description" type="text"
                                                    class="form-control ckeditor {{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                    name="description" value="{{ old('description') }}"
                                                    placeholder="Enter Description"></textarea>
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="icon_class" type="text"
                                                    class="form-control {{ $errors->has('icon_class') ? ' is-invalid' : '' }}"
                                                    name="icon_class" value="{{ old('icon_class') }}" placeholder="Enter Icon class">
                                                @if ($errors->has('icon_class'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('icon_class') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="link_to" type="text"
                                                    class="form-control {{ $errors->has('link_to') ? ' is-invalid' : '' }}"
                                                    name="link_to" value="{{ old('link_to') }}" placeholder="Enter URL">
                                                @if ($errors->has('link_to'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('link_to') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-group mb-3">
                                                <input id="link_title" type="text"
                                                    class="form-control {{ $errors->has('link_title') ? ' is-invalid' : '' }}"
                                                    name="link_title" value="{{ old('link_title') }}" placeholder="Enter URL Text">
                                                @if ($errors->has('link_title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('link_title') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            
                                            <div class="">
                                                <input id="image" type="file"
                                                    class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                                    name="image" value="{{ old('image') }}">
                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">

                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-block btn-flat">Create</button>
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-6">
                                                        <a href="{{ route('admin.bootcamps.index') }}"
                                                            class="btn btn-danger btn-block btn-flat">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
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
