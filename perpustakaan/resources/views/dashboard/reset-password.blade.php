@extends('layout.login')
@section('login')
<body style="background-image: url('images/kemenkumham.png'); background-size:1000px">

<div class="container" style="margin: 0 0 0 0; position: fixed; top: 20%; left: 50%; transform: translatex(-50%); ">
    <h2>Reset Password</h2>

    <!-- Menambahkan pesan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger" style="color: red; text-align: center;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success" style="color: green; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <div class="form-groups">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-groups">
            <label for="password">Password Baru:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-groups">
            <label for="password_confirmation">Konfirmasi Password Baru:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btns" style="margin-top: 20px; color: rgb(255, 255, 255)">Reset Password</button>
    </form>
</div>
@endsection
