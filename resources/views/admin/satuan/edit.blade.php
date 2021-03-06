@extends('layouts.app')

@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Satuan</li>
			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Satuan</h1>
			</div>
		</div><!--/.row-->
@endsection

@section('content')

<div class="row">

<div class="col-sm-1"></div>

<div class="panel panel-default col-md-9">
    <div class="panel-heading"><span class="col-sm-10"><h4> Form Edit Satuan</h4></span>
        <a href="{{ route('satuan.index') }}" class="btn btn-default float-right col-sm-2"><span class="fa fa-arrow-left">&nbsp;</span> Kembali</a>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            <form role="form" action="{{ route('satuan.update',$satuan->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Satuan</label>
                    <input value="{{ $satuan->nama_satuan }}" type="text" name="nama_satuan" class="form-control" placeholder="Nama Satuan">
                </div>
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
