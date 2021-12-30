@extends('layouts.app')

@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Supplier</li>
			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Supplier</h1>
			</div>
		</div><!--/.row-->
@endsection

@section('content')
<div class="row">

    <div class="col-sm-1"></div>

    <div class="panel panel-default col-md-10">
        <div class="panel-heading"><span class="col-sm-10"><h4> Supplier</h4></span>
            <a href="{{ route('supplier.create') }}" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php $no=1 @endphp
                    @foreach ($supplier as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nama_supplier}}</td>
                            <td>{{$data->no_telepon}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>
                                <form class="text-center" action="{{route('supplier.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <a href="{{route('supplier.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
