@extends('layout.login')
@section('login')
<body style="background-image: url('images/Kantor123.png'); background-size:1500px">
    
    <a href={{asset('home')}} class="btn btn-primary" style="margin: 40px 30px 1000px 64px; background-color: #5c6bc0; border: none; padding: 8px 20px; border-radius: 30px; color: white; font-size: 0.9rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; display: inline-block; text-align: center;">
        Kembali
    </a>
<div class="container" style="margin: 0 0 0 0; position: fixed; top: 20%; left: 50%; transform: translatex(-50%); ">
    <h2>Login Keanggotaan</h2>

    <!-- Menambahkan pesan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger" style="color: red; text-align: center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('login.authenticate') }}" method="POST">
        @csrf
        <div class="form-groups">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-groups">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
            <button type="submit" class="btns" style="flex: 1; margin-right: 10px; color: rgb(255, 255, 255)">Login</button>
            <a href="{{ route('register') }}" class="btns" style="flex: 1; text-align: center; background-color: #28a745; color: #fff; margin-left: 10px;">Sign Up</a>
        </div>
        <p class="forgot-password" style="color: aliceblue; text-align: center; margin-top: 15px;">
            Forgot password? <a href="{{ route('password.reset') }}">Click here</a>
        </p>
    </form>
</div>
@endsection
