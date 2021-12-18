<div class="container-fluid no-padding member" style="background: #22ad95;">
    <div class="container">
        <nav class="navbar navbar-expand-md cstm-bg-blue">
            <a class="navbar-brand" href="#" style="color: #fff">MEMBER AREA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="fa fa-bars" style=" color: #fff"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item r1">
                        <a class="nav-link" href="#"><i class="fa fa-bell"></i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item r2 dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">&nbsp;&nbsp;Hammad Khan</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:;">Profile</a>
                            <a class="dropdown-item" onclick="$('#logout_form').submit()" href="javascript:;">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item r3">
                        <a class="nav-link" href="#">
                            <div class="picture" style="top: 0px; left: -40px;width: 35px;
    height: 35px;
    padding: 10px 0 0;
    color: #000;
    font-weight: 700;
    font-size: 15px;">
                                <span>HD</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>



<form id="logout_form" method="POST" action="{{ route('logout') }}">
    {{ csrf_field() }}
</form>


