@extends('layouts.app')

@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Barang Keluar</li>
			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Barang Keluar</h1>
			</div>
		</div><!--/.row-->
@endsection

@section('content')
<div class="row">

    <div class="col-sm-1"></div>

    <div class="panel panel-default col-md-10">
        <div class="panel-heading"><span class="col-sm-10"><h4> Barang Keluar</h4></span>
            <a href="{{ route('barang-keluar.create') }}" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang Keluar</th>
                        <th>Tanggal Keluar</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Keluar</th>
                        <th>User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- data palsu -->
                    <tr>
                        <td>1</td>
                        <td>001AC</td>
                        <td>20-12-2021</td>
                        <td>Semen</td>
                        <td>10</td>
                        <td>Admin</td>
                        <td class="text-center">
                            <a href="" class="btn btn-warning">Edit</a> |
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
