@extends('template')

@section('content')
<form id="formProduk" role="form" class="form" action="" enctype="multipart/form-data" method="POST" autocomplete="off">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="row row-title">
            <div class="col-lg-12">
                <div class="col-lg-10">
                    <h2>
                        Manajemen Produk
                    </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                Manajemen Produk
                            </a>
                        </li>
                        <li class="active">
                            <strong>
                                Tambah Produk
                            </strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12"> 
                <hr>
            </div>
        </div>

        <div class="row row-subtitle">
            <div class="col-lg-12">
                <div class="col-lg-8">
                    <h2>Tambah Produk</h2>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    
        <div class="row row-content">
            <div class="col-lg-12">
                <div class="col-lg-2">
                    <div class="upload-area">
                        <div class="btn uploads" onclick="uploadFile()">
                            <span class="fa fa-cloud-upload icon-upload"></span>
                            <p>Upload Foto</p>
                        </div>
                        <input name="file" id="uploads" type="file" class="display_none">
                    </div>
                    <div class="upload-info">
                        ( Maksimal 1 Mb )
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="form-group">
                        <label class="col-sm-12">Nama Produk <span class="require-icon">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control inp_nama" id="inp_nama" name="inp_nama" required data-tooltipster='{"side":"right","animation":"slide"}'>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Kategori <span class="require-icon">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control inp_kategori" id="inp_kategori" name="inp_kategori" required data-tooltipster='{"side":"right","animation":"slide"}'>
                                <option></option>
                                <option value='1'>Kategori A</option>
                                <option value='2'>Kategori B</option>
                                <option value='3'>Kategori C</option>
                                <option value='4'>Kategori D</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Harga Jual <span class="require-icon">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control inp_harga" id="inp_harga" name="inp_harga" required data-tooltipster='{"side":"right","animation":"slide"}'>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-lg-10">
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse_produk">
                                        <i class="fa fa-angle-down icon-big"></i> &nbsp; Pengaturan Produk (Opsional)
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse_produk" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="col-md-2"></div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label class="col-sm-12">Produk Ini Dijual</label>
                                            <div class="col-sm-12">
                                                <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked=""> Ya
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Tidak
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">SKU <span class="info-input" title="SKU adalah kode unik yang diberikan kepada setiap item barang baik yang dibeli maupun dijual oleh perusahaan.">(Apa ini?)</span></label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control inp_sku" id="inp_sku" name="inp_sku">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Barcode</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control inp_barcode" id="inp_barcode" name="inp_barcode">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Harga Beli</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control inp_harga_beli" id="inp_harga_beli" name="inp_harga_beli">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Pajak</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control inp_pajak" id="inp_pajak" name="inp_pajak">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Deskripsi Produk</label>
                                            <div class="col-sm-12">
                                                <textarea name="inp_deskripsi" id="inp_deskripsi" class="form-control inp_deskripsi" cols="2" rows="2"></textarea>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="well">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="">Varian Produk</label>
                                                    </div>
                                                    <div style="float: left;">
                                                        <p>Apakah produk ini memiliki varian seperti warna dan ukuran?</p>
                                                    </div>
                                                    <div style="float: right;">
                                                        <div class="switch">
                                                            <div class="onoffswitch">
                                                                <input type="checkbox" class="onoffswitch-checkbox varian" id="varian" name="varian" value="1" checked="">
                                                                <label class="onoffswitch-label" for="varian">
                                                                    <span class="onoffswitch-inner"></span>
                                                                    <span class="onoffswitch-switch"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div>
                                                        <button type="button" class="btn btn-outline btn-info btn-rounded btn-detail">Varian Produk</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <label class="">Opsi Tambahan</label>
                                                    </div>
                                                    <div style="float: left;">
                                                        <p>Apakah produk ini memiliki opsi tambahan yang dapat dipesan?</p>
                                                    </div>
                                                    <div style="float: right;">
                                                        <div class="switch">
                                                            <div class="onoffswitch">
                                                                <input type="checkbox" class="onoffswitch-checkbox opsi" id="opsi" name="opsi" value="1">
                                                                <label class="onoffswitch-label" for="opsi">
                                                                    <span class="onoffswitch-inner"></span>
                                                                    <span class="onoffswitch-switch"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div style="height: 30px;">

                                                        <!-- <button class="btn btn-outline btn-info btn-rounded btn-detail">Varian Produk</button> -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <label class="">Bahan Baku</label>
                                                    </div>
                                                    <div style="float: left;">
                                                        <p>Apakah Anda ingin mengelola bahan baku produk ini?</p>
                                                    </div>
                                                    <div style="float: right;">
                                                        <div class="switch">
                                                            <div class="onoffswitch">
                                                                <input type="checkbox" class="onoffswitch-checkbox varian" id="varian" name="varian" value="1" checked="">
                                                                <label class="onoffswitch-label" for="varian">
                                                                    <span class="onoffswitch-inner"></span>
                                                                    <span class="onoffswitch-switch"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div>
                                                        <button type="button" class="btn btn-outline btn-info btn-rounded btn-detail">Bahan Baku</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <label class="">Stok</label>
                                                    </div>
                                                    <div style="float: left;">
                                                        <p>Apakah Anda ingin mengelola stok produk ini?</p>
                                                    </div>
                                                    <div style="float: right;">
                                                        <div class="switch">
                                                            <div class="onoffswitch">
                                                                <input type="checkbox" class="onoffswitch-checkbox varian" id="varian" name="varian" value="1" checked="">
                                                                <label class="onoffswitch-label" for="varian">
                                                                    <span class="onoffswitch-inner"></span>
                                                                    <span class="onoffswitch-switch"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div>
                                                        <button type="button" class="btn btn-outline btn-info btn-rounded btn-detail">Stok</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="button" class="btn btn-outline btn-info btn-rounded btn-pre-submit">
                                                Pengaturan Harga & Status Dijual
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <button type="button" class="btn btn-info btn-rounded btn-submit" onclick="addProduk()">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop