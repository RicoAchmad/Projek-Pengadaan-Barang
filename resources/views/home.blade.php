@extends('layouts.app')


@section('header')
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
        @endsection

@section('content')

<div class="row">
    <div class="col-xs-6 col-md-4">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel"><br>
                <em class="fa fa-xl fa-dropbox color-blue"></em>
                <h1>7</h1>
				<h4>Total Data Barang</h4><br>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-4">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <br>
                <em class="fa fa-xl fa-users color-blue"></em>
                <h1>4</h1>
				<h4>Data Supplier</h4><br>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-4">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <br>
                <em class="fa fa-xl fa-user-circle color-blue"></em>
                <h1>3</h1>
				<h4>Data User</h4><br>
            </div>
        </div>
    </div>

</div><!--/.row-->
@endsection

@section('c')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @role('admin')
                        Role Admin {{ \Laratrust::hasRole('admin') }}
                    @endrole

                    @role('petugas')
                        Role Petugas {{ \Laratrust::hasRole('petugas') }}
                    @endrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
