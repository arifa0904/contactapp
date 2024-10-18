@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1 class="text-4xl font-bold mb-6 text-pink-600">Contact Page</h1>
    
    <table class="table-auto w-full bg-white shadow-md rounded-lg border border-pink-300">
        <thead>
            <tr class="bg-pink-500 text-white">
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Role</th>
                <th class="px-4 py-3">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $people = [
                    ['name' => 'John Doe', 'role' => 'Mahasiswa', 'email' => 'john@example.com'],
                    ['name' => 'Jane Doe', 'role' => 'Karyawan', 'email' => 'jane@example.com'],
                    ['name' => 'Alice Smith', 'role' => 'Mahasiswa', 'email' => 'alice@example.com'],
                    ['name' => 'Bob Johnson', 'role' => 'Karyawan', 'email' => 'bob@example.com'],
                    ['name' => 'Charlie Brown', 'role' => 'Dosen', 'email' => 'charlie@example.com'],
                    ['name' => 'Diana Prince', 'role' => 'Mahasiswa', 'email' => 'diana@example.com'],
                    ['name' => 'Edward Norton', 'role' => 'Karyawan', 'email' => 'edward@example.com'],
                    ['name' => 'Fiona Apple', 'role' => 'Mahasiswa', 'email' => 'fiona@example.com'],
                    ['name' => 'George Clooney', 'role' => 'Karyawan', 'email' => 'george@example.com'],
                    ['name' => 'Hannah Montana', 'role' => 'Mahasiswa', 'email' => 'hannah@example.com'],
                    ['name' => 'Isabella Rossellini', 'role' => 'Dosen', 'email' => 'isabella@example.com'],
                    ['name' => 'Jack Black', 'role' => 'Karyawan', 'email' => 'jack@example.com'],
                    ['name' => 'Katherine Johnson', 'role' => 'Mahasiswa', 'email' => 'katherine@example.com'],
                    ['name' => 'Leonardo DiCaprio', 'role' => 'Karyawan', 'email' => 'leo@example.com'],
                    ['name' => 'Megan Fox', 'role' => 'Mahasiswa', 'email' => 'megan@example.com'],
                    ['name' => 'Nathan Drake', 'role' => 'Dosen', 'email' => 'nathan@example.com'],
                ];
            @endphp

            @foreach ($people as $index => $person)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $person['name'] }}</td>
                    <td class="border px-4 py-2">{{ $person['role'] }}</td>
                    <td class="border px-4 py-2">{{ $person['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
