@section('menu_admin')

<li class="sidebar-item selected">
    <a class="sidebar-link has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false">
        <i class="mdi mdi-av-timer"></i>
        <span class="hide-menu">MASTER</span>
    </a>
    <ul aria-expanded="false" class="collapse  first-level in">
        <li class="sidebar-item">
            <a href="/cars" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Data Mobil </span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/brands" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Data Brands </span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/clients" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Data Peyewa </span>
            </a>
        </li>
    </ul>
</li>
<li class="sidebar-item selected">
    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
        <i class="mdi mdi-av-timer"></i>
        <span class="hide-menu">LAPORAN</span>
    </a>
    <ul aria-expanded="false" class="collapse first-level in">
        <li class="sidebar-item">
            <a href="/transaction" class="sidebar-link">
                <i class="mdi mdi-adjust"></i>
                <span class="hide-menu"> Data Transaksi </span>
            </a>
        </li>
    </ul>
</li>

@endsection