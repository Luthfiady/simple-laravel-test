@extends('home')

@section('content')
    <div class="row">
        <div class="page-header">
            <h1>{{ $title }} <small>({{ $subtitle }})</small></h1>
        </div>
    </div>

    <div class="row">
        <form id="formUser" role="form" class="form form-horizontal" action="" enctype="multipart/form-data" method="POST" autocomplete="off">
            <div class="form-group">
                <label class="control-label col-sm-1">UUID</label>
                <div class="col-sm-5">
                    <input type="text" name="inp_uuid" id="inp_uuid" class="form-control inp_uuid" value="{{ $uuid }}" readonly="" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1">Nama</label>
                <div class="col-sm-5">
                    <input type="text" name="inp_name" id="inp_name" class="form-control inp_name" placeholder="Masukkan nama" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1">Alamat</label>
                <div class="col-sm-5">
                    <textarea name="inp_address" id="inp_address" class="form-control inp_address" rows="2" placeholder="Masukkan alamat" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <button type="button" onclick="addUser()" class="btn btn-primary">Submit</button>
                    <button type="button" onclick="resetForm(1)" class="btn btn-danger" style="float: right;">Reset</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="page-header">
            <h1>{{ $title_2 }}</h1>
        </div>
    </div>

    <div class="row">
        <table class="table table-hover table-bordered">
            <thead style="background-color: #eee;">
                <tr>
                    <th width="20%"><strong>ID Customer</strong></th>
                    <th width="30%"><strong>Nama</strong></th>
                    <th width="50%"><strong>Alamat</strong></th>
                </tr>
            </thead>
            <tbody id="dataTable">
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/app/user.js') }}"></script>
@endsection