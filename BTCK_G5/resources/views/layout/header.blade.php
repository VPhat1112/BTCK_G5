<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <img src="{{ asset('storage/Test.png') }}" alt="tester" width="100px" height="100px">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()-> is('/trangchu') ? 'activate' : '' }}" href="/trangchu">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()-> is('/view-cart') ? 'activate' : '' }}" href="/view-cart">Cart</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link {{ request()-> is('/post') ? 'activate' : '' }}" href="post">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Profile</a>
            </li>
        </ul>
    </div>
</nav>