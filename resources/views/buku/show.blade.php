@extends('layout.main')
@section('title','List-Buku')
@section('sample')
<section class="content-header">
	<h1>
		Dashboard
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-success">
		<div class="box-header">
          <i class="fa fa-comments-o"></i>

          <h3 class="box-title">Chat</h3>

          <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
            </div>
          </div>
        </div>
        <div class="box-body chat" id="">
			<table border="1" width="100%">
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Penerbit</th>
					<th>Pengarang</th>
					<th>Harga</th>
				</tr>
				{!! $nomor=1 !!}	
				<tr>
					<td>{{ $nomor }}</td>
					<td>{{ $user -> BUKU_Name }}</td>
					<td>{{ $user -> BUKU_Penerbit }}</td>
					<td>{{ $user -> BUKU_Pengarang }}</td>
					<td>{{ $user -> BUKU_Harga }}</td>
				</tr>
			</table>
        </div>
        <div class="box-footer">
	      <div class="input-group">
	        <input class="form-control" placeholder="Type message...">

	        <div class="input-group-btn">
	          <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
	        </div>
	      </div>
	    </div>
	</div>
</section>
@stop