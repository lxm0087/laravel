<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="navbar-brand" href="{{route('home')}}">weiboApp</a>
        <ul class="navbar-nav justify-content-end">
            @if( Auth::check() )
                <li class="nav-item"><a class="nav-link" href="#">用户列表</a> </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown"  aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labellledby="navDropdown">
                        <a class="dropdown-item" href="{{ route('users.show',Auth::user()) }}">个人中心</a>
                        <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <a href="dropdown-item" id="logout" href="#">
                            <form action="{{ route('logout') }}" method='post'>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                            </form>
                        </a>

                    </div>
                </li>
                @else
            <li class="nav-item"><a href="{{route('help')}}" class="nav-link">帮助</a></li>
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">登录</a></li>
                @endif
        </ul>
    </div>
</nav>
