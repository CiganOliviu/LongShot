@extends('layouts.mainlayout')

@section('content')


    <div class="paralax-background">
        <div align="center">
            <nav class="nav-conainer">
                <input type="checkbox" id="nav" class="hidden"/>
                <label for="nav" class="nav-open"><i></i><i></i><i></i></label>
                <div class="nav-container">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="band-news">News</a></li>
                        <li><a href="tour">Tour</a></li>
                        <li><a href="#">Music</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div>&nbsp;</div>

        <div class="container" align="center">
            <div class="col-lg-12">
                <div class="presentation">
                    <h1><b>BAND NEWS</b></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" align="center">
        <div class="col-lg-12">
            @foreach ($tours as $tours)
                <div class="content">
                    <h1><b>{{ $tours->space }}</b></h1>

                    <div>&nbsp;</div>

                    <p>
                        {{ $tours->location }}
                    </p>

                    <div>&nbsp;</div>

                    <p>
                        {{ $tours->time }}
                    </p>

                    <div>&nbsp;</div>

                    <p> {{ $tours->ticket }} </p>
                </div>
                <div>&nbsp;</div>
            @endforeach
        </div>
    </div>

@endsection
