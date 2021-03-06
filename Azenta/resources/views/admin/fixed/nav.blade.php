<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#pablo"> Dashboard </a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <span class="d-lg-none">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown nav-item">

                        <a href="{{url("/admin/notifications")}}" class=" nav-link" >
                                <i class="nc-icon nc-email-85"></i>
                            @isset($messagesNumber)
                                @if($messagesNumber->messageNumber != 0)
                                    <span class="notification">{{$messagesNumber->messageNumber}}</span>
                                @endif
                            @endisset
                            <span class="d-lg-none">Notification</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link " href="{{route("logout")}}">
                            <span class="no-icon">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
