<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="/">
                <div class="form-group">
                    <input type="text" placeholder="Carian umum" class="form-control" name="top-search" id="top-search" />
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                        {{--<span class="label label-danger">0</span>--}}
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li></li>
                        {{--<li>--}}
                            {{--<a href="mailbox.html">--}}
                                {{--<div>--}}
                                    {{--<i class="fa fa-envelope fa-fw"></i> You have 16 messages--}}
                                    {{--<span class="pull-right text-muted small">4 minutes ago</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li>--}}
                            {{--<a href="profile.html">--}}
                                {{--<div>--}}
                                    {{--<i class="fa fa-twitter fa-fw"></i> 3 New Followers--}}
                                    {{--<span class="pull-right text-muted small">12 minutes ago</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li>--}}
                            {{--<a href="grid_options.html">--}}
                                {{--<div>--}}
                                    {{--<i class="fa fa-upload fa-fw"></i> Server Rebooted--}}
                                    {{--<span class="pull-right text-muted small">4 minutes ago</span>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li>--}}
                            {{--<div class="text-center link-block">--}}
                                {{--<a href="notifications.html">--}}
                                    {{--<strong>See All Alerts</strong>--}}
                                    {{--<i class="fa fa-angle-right"></i>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    </ul>
                </li>


                <li>
                    <form action="/logout" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-clear btn-outline" style="margin:14px 0 12px"><i class="fa fa-sign-out"></i> Log Keluar</button>
                    </form>
                </li>
            </ul>
        {{-- <ul class="nav navbar-top-links navbar-right">
            <li>
                <form action="/logout" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-clear btn-outline" style="margin-top: 8px"><i class="fa fa-sign-out"></i> Log Keluar</button>
                </form>
            </li>
        </ul> --}}
    </nav>
</div>
