@extends('layouts.app')

@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">User Management</li>
			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User Management</h1>
			</div>
		</div><!--/.row-->
@endsection

@section('content')
<div class="row">

    <div class="col-sm-1"></div>

    <div class="panel panel-default col-md-10">
        <div class="panel-heading"><span class="col-sm-10"><h4> User Manangement</h4></span>
            <a href="" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- data palsu -->
                    <tr>
                        <td>1</td>
                        <td>Akbar Ginanjar</td>
                        <td>akbarginanjar@mgial.com</td>
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
