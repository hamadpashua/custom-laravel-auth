@extends('layouts.app')

@section('content')

    <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">Welcome Back.</h1>
        <p class="fs-5">This example shows how responsive offcanvas menus work within the navbar. For
            positioning of navbars, checkout the <a href="/docs/5.3/examples/navbar-static/">top</a> and <a
                href="/docs/5.3/examples/navbar-fixed/">fixed top</a> examples.</p>

        <p> <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Log Out</button>
        </form> </p>
    </div>

@endsection