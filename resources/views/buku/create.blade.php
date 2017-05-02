@extends('layout.main')
@section('title','List-Buku')
@section('sample')
<section class="content-header">
	<h1>
		Create Buku
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Buku</a></li>
		<li class="active">Create</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-success">
		<div class="box-header">
          <i class="fa fa-list-o"></i>

          <h3 class="box-title">Buku</h3>

          <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
          </div>
        </div>
        <div class="box-body chat" id="">
			<form action="/buku/store" method="POST">
				{{csrf_field()}}
				<div class="box-body">
	                <div class="form-group">
	                  <label  >Nama Buku</label>
	                  <input type="text" class="form-control"   placeholder="Masukan Nama Buku" name="txtNamaBuku">
	                </div>
	                <div class="form-group">
	                  <label  >Pengarang Buku</label>
	                  <input type="text" class="form-control"   placeholder="Masukan Pengarang Buku" name="txtPengarangBuku">
	                </div>
	                <div class="form-group">
	                  <label  >Penerbit Buku</label>
	                  <input type="text" class="form-control"   placeholder="Masukan Penerbit Buku" name="txtPenerbitBuku">
	                </div>
	                <div class="form-group">
	                  <label  >Harga Buku</label>
	                  <input type="number" class="form-control"   placeholder="Masukan Harga Buku" name="txtHargaBuku">
	                </div>
	            </div>
	            <div class="box-footer">
	            	<div class="form-group">
	                  <input type="submit" class="pull-right box-tools btn btn-primary" value="Simpan" name="cmdSimpan">
	                </div>
	            </div>
			</form>
        </div>
	</div>
</section>
@stop