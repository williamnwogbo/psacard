@extends('layouts.login')

@section('content')


    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Sign In
            </h2>
            <div class="intro-x mt-2 text-gray-500 dark:text-gray-500">Gain access to your account</div>
            @include('errors.showerrors')
<form action="{{ url('/login') }}" method="post">
    @csrf
            <div class="intro-x mt-8">
                  <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" name="email" value="{{ old('email') }}" placeholder="Email">
                  <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" name="password" placeholder="Password">
            </div>

            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top">Login</button>
           </div>
</form>
        </div>
    </div>

    @endsection