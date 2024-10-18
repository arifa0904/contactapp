@extends('componen.layout')

@section('title', 'Login')

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-pink-800 mb-6 text-center">Login</h1>

        @if(session('error'))
            <div class="bg-red-500 text-white p-2 mb-4 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold text-pink-700">Email</label>
                <input type="email" id="email" name="email" class="border border-pink-300 p-2 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold text-pink-700">Password</label>
                <input type="password" id="password" name="password" class="border border-pink-300 p-2 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 w-full rounded-lg shadow-lg transition duration-300">
                Login
            </button>
        </form>

        <p class="mt-4 text-sm text-center text-pink-600">
            Don't have an account? 
            <a href="{{ route('register') }}" class="font-bold text-pink-700 hover:text-pink-800 transition">Register</a>
        </p>
    </div>
@endsection
