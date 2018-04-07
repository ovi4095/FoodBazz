<header>
    <nav class="navbar navbar-expand-lg navbar-dark headerStyle navbar fixed-top " style="">
        <img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
        <a class="navbar-brand" href="javascript:void(0)">FoodBuzz</a>
        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse " style="color: white; margin-left: 100px" id="navb">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a href="{{URL::to('/')}}" class="btn btn-outline-secondary " style="margin-left: 15px; color: white;">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">Language
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">English</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">More
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('restaurent_list')}}">Restaurant</a>
                        <a class="dropdown-item" href="{{url('offer-list')}}">Offers</a>
                        <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
            </ul>
            <div class="container-fluid justify-content-end row" >
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-secondary nav-link dropdown-toggle  fa fa-user fa-fw" href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 15px; color: white; ">User
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/admin-home')}}">Home</a>
                            <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-btn').submit();" >Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="logout-btn">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
