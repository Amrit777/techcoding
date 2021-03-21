<div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1" role="dialog"
    aria-labelledby="custom-width-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="POST" class="remove-record-model">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="float: right">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>You Want You Sure Delete This Record?</h4>
                    <input type="hidden" name="applicant_id" id="app_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit"
                        class="btn btn-danger waves-effect remove-data-from-delete-form">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Image Parameter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="image_param" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <img src="" id="pathImage" style="width: 100px">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="keyword">Keyword</label>
                                <input class="form-control" type="text" id="keyword" name="keyword">
                            </div>
                            <div class="form-group">
                                <label for="alt">Alt</label>
                                <input class="form-control" type="text" id="alt" name="alt">
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                    <input type="hidden" id="media_id" name="id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveImageModal">Save changes</button>
            </div>
        </div>
    </div>
</div>
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
    </div>
</footer>

