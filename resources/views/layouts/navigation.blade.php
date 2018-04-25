<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <img alt="image" class="img-circle" src="https://picsum.photos/48?image=249"/>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs">{{ Auth::check() ? Auth::user()->short_name : 'Ejinayat Test User' }}</span>
                                        <span class="text-muted text-xs">{{ date('D d M Y') }}</span>
                                    </span>
                                </a>
                                <strong class="font-bold"></strong>
                            </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <form action="/logout" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-clear">Log Keluar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>

            @include('layouts.menu')
        </ul>
    </div>
</nav>
@include('layouts.nav-footer')
