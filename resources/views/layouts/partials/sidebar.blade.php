<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="{{ Request::is('admin')? "active":"" }}"><a href="/admin"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="{{ Request::is('admin/supplier')? "active":"" }}"><a href="/admin/supplier"><em class="fa fa-users">&nbsp;</em> Supplier</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
            <em class="fa fa-archive">&nbsp;</em> Barang <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li class="{{ Request::is('satuan')? "active":"" }}"><a href="satuan">
                    <span class="fa fa-angle-right">&nbsp;</span> Satuan Barang
                </a></li>
                <li class="{{ Request::is('jenis')? "active":"" }}"><a href="jenis">
                    <span class="fa fa-angle-right">&nbsp;</span> Jenis Barang
                </a></li>
                <li class="{{ Request::is('barang')? "active":"" }}"><a href="barang">
                    <span class="fa fa-angle-right">&nbsp;</span> Nama Barang
                </a></li>
            </ul>
        </li>
        <li class="{{ Request::is('barang-masuk')? "active":"" }}"><a href="/barang-masuk" ><em class="fa fa-download">&nbsp;</em> Barang Masuk</a></li>
        <li  class="{{ Request::is('barang-keluar')? "active":"" }}"><a href="/barang-keluar"><em class="fa fa-upload">&nbsp;</em> Barang Keluar</a></li>
        <li  class="{{ Request::is('cetak-laporan')? "active":"" }}"><a href="/cetak-laporan"><em class="fa fa-print">&nbsp;</em> Cetak Laporan</a></li>
        @role('admin')
        <li  class="{{ Request::is('user-management')? "active":"" }}"><a href="/admin/user-management"><em class="fa fa-user">&nbsp;</em> User Management</a></li>
        @endrole
    </ul>
</div><!--/.sidebar-->
