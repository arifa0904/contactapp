@extends('componen.layout')

@section('title', 'Welcome to ContactApps')

@section('content')
    <div class="text-center">
        <h1 class="text-5xl font-bold text-pink-800 mb-4">Welcome to ContactApps</h1>
        <p class="text-pink-700 text-lg mb-8">A place where your journey begins!</p>

        <div class="space-x-4">
            <a href="{{ route('login') }}" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">
                Login
            </a>
            <a href="/register" class="bg-pink-300 hover:bg-pink-400 text-pink-800 font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">
                Register
            </a>
        </div>
    </div>
@endsection
