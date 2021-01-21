@extends('layouts.admin')
@section("title","Submit Data")

@section('content')

    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-12">
            <form action="{{ url('/submit/data') }}" method="post">
@csrf
                <label>Enter PSA CARD URL: </label>
            <input type="url" name="link" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13 mt-2" placeholder="URL">

            <input type="submit" value="Get the data in" class="button w-24 mr-1 mb-2 bg-theme-1 text-white mt-2" style="float: right"/>

        </form>
    </div>
    </div>
@endsection