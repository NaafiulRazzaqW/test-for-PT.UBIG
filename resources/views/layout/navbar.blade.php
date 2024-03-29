<nav class="navbar bg-info-subtle sticky-top pt-0 pb-0">
    <div class="container-fluid">
        <a class="navbar-brand ps-4">Welcome <b>{{ session()->get('name') }}</b></a>
        <form action="{{route("submit_logout")}}" method="POST" class="d-flex pe-2 ">
            @csrf
            <button type="submit" class="btn" id="btn"><svg class="text-danger" id="btn"
                    xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-box-arrow-right" viewBox="0 0 16 16" onclick="return confirm('Are you sure to logout?')">
                    <path fill-rule="evenodd"
                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                    <path fill-rule="evenodd"
                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                </svg></button>
        </form>
    </div>
</nav>
