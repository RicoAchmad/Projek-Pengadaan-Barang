@extends('layouts.app')

@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Barang</li>
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

<div class="panel panel-default col-md-9">
    <div class="panel-heading"><span class="col-sm-10"><h4> Form Input Barang Keluar</h4></span>
        <a href="{{ route('barang-keluar.index') }}" class="btn btn-default float-right col-sm-2"><span class="fa fa-arrow-left">&nbsp;</span> Kembali</a>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            <form role="form" action="{{ route('barang-keluar.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>ID Transaksi Barang Keluar</label>
                    <input class="form-control boxed" placeholder="Kode" required="required" name="kode_barang_keluar" type="text" value="{{ $kode }}" id="kode" readonly>                                        
                </div>
                <div class="form-group">
                    <label>Tanggal Keluar</label>
                    <input type="date" name="tanggal_keluar" class="form-control">
                </div>
                <div class="form-group">
                    <label>Barang</label>
                    <select name="barang_id" class="form-control">
                        
                            @foreach($barang as $data)
                                <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                            @endforeach
                        
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="" class="form-control" placeholder="0" readonly>
                </div> --}}
                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" name="qty" class="form-control" placeholder="Jumlah Keluar">
                </div>
                <div class="form-group">
                    <label>Pengeluar</label>
                    <select name="user_id" class="form-control">
                        
                            @foreach($user as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                        
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label>Total Stok</label>
                    <input type="text" name="" class="form-control" placeholder="0" readonly>
                </div> --}}
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-default" type="reset">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

@endsection