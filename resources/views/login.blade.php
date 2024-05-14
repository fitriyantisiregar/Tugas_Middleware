<!-- resources/views/products.blade.php -->
@extends('layouts.app')
@section('content')
    <h1>Products Page</h1>
    <!-- Daftar produk di sini -->
@endsection

<!-- resources/views/user_management.blade.php -->
@extends('layouts.app')
@section('content')
    <h1>User Management</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Umur</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->birthdate }}</td>
                <td>{{ $user->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection