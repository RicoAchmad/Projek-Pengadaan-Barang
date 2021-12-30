@extends('layouts.app')

@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Barang Masuk</li>
			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Barang Masuk</h1>
			</div>
		</div><!--/.row-->
@endsection

@section('content')
<div class="row">

    <div class="col-sm-1"></div>

    <div class="panel panel-default col-md-10">
        <div class="panel-heading"><span class="col-sm-10"><h4> Barang Masuk</h4></span>
            <a href="{{ route('barang-masuk.create') }}" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang Masuk</th>
                        <th>Tanggal Masuk</th>
                        <th>Supplier</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Penerima</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- data palsu -->
                     @php $no=1 @endphp
                    <!-- data -->
                    @foreach ($masuk as $data)   
                    <tr>
                        <td class="text-center">{{$no++}}</td>
                        <td class="text-center">{{$data->kode_barang_masuk}}</td>
                        <td class="text-center">{{$data->tanggal_masuk}}</td>
                        <td class="text-center">{{$data->supplier->nama_supplier}}</td>
                        <td class="text-center">{{$data->barang->nama_barang}}</td>
                        <td class="text-center">{{$data->qty}}</td>
                        <td class="text-center">{{$data->user->name}}</td>
                        <td class="text-center">
                            <form class="text-center" action="{{route('barang.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <a href="{{route('barang.edit',$data->id)}}" class="btn btn-warning">Edit</a>
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
