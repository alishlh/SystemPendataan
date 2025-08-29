@extends('admin.master')

@section('content')
<main class="main-content">
    <div class="container-fluid">
        <h1>Detail User</h1>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Email Verified</th>
                <td>{{ $user->email_verified_at ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ ucfirst($user->role) }}</td>
            </tr>
        </table>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</main>
@endsection
