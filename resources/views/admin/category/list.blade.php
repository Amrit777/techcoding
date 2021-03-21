@extends('admin.layout.master')
@section('content')

    <div class="content-wrapper">
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

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3> Bootcamps </h3>
                            <a href="{{ route('admin.bootcamps.create') }}" class="btn btn-primary set-button"
                                title="Create Bootcamps">+</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped data-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th width="100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        // $(function() {
        //     $("#example1").DataTable({
        //         "responsive": true,
        //         "lengthChange": false,
        //         "autoWidth": false,
        //         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        //     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        //     $('#example2').DataTable({
        //         "paging": true,
        //         "lengthChange": false,
        //         "searching": false,
        //         "ordering": true,
        //         "info": true,
        //         "autoWidth": false,
        //         "responsive": true,
        //     });
        // });

    </script>
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.bootcamps.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });

    </script>
@endsection
