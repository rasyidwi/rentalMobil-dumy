@section('menu_cust')
<li class="sidebar-item selected">
    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
        <i class="mdi mdi-av-timer"></i>
        <span class="hide-menu">TRANSAKSI</span>
    </a>
    <ul aria-expanded="false" class="collapse  first-level in">
        <li class="sidebar-item">
            <a href="/bookings" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Bookings </span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/returns" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Returns </span>
            </a>
        </li>
    </ul>
</li>
@endsection