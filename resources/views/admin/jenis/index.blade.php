@extends('layouts.app')

@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Jenis</li>
			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Jenis</h1>
			</div>
		</div><!--/.row-->
@endsection

@section('content')
<div class="row">

    <div class="col-sm-1"></div>

    <div class="panel panel-default col-md-10">
        <div class="panel-heading"><span class="col-sm-10"><h4> Jenis Barang</h4></span>
            <a href="{{ route('jenis.create') }}" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Jenis</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- data palsu -->
                    @php $no=1 @endphp
                    <!-- data -->
                    @foreach ($jenis as $data)   
                    <tr>
                        <td class="text-center">{{$no++}}</td>
                        <td class="text-center">{{$data->nama_jenis}}</td>
                        <td class="text-center">
                            <form class="text-center" action="{{route('jenis.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <a href="{{route('jenis.edit',$data->id)}}" class="btn btn-warning">Edit</a>
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
