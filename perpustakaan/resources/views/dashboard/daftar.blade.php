@extends('layout.login')
@section('login')
<body style="background-image: url('images/Kantor123.png'); background-size:1500px">
    <a href={{asset('login')}} class="btn btn-primary" style="margin: 40px 30px 1000px 64px; background-color: #5c6bc0; border: none; padding: 8px 20px; border-radius: 30px; color: white; font-size: 0.9rem; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; display: inline-block; text-align: center;">
        Kembali
    </a>
<img src="{{ asset('images/Kanwil.jpeg') }}" alt="" style="width: 500px; height: auto; position: fixed; top: 0; left: 0;">
<div class="containers" style="margin: 0 0 0 220px; position: fixed; top: 1%; left: 300px;">
    <h2>Daftar Keanggotaan</h2>

    <!-- Menampilkan pesan error jika ada kesalahan dalam form -->
    @if ($errors->any())
        <div class="alert alert-danger" style="text-align: center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="form-groups">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-groups">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-groups">
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" value="{{ old('nik') }}" required>
            @error('nik')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-groups">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" 
                   value="{{ old('tanggal_lahir') }}" 
                   max="{{ date('Y-m-d') }}" required>
            @error('tanggal_lahir')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-groups">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-groups">
            <label for="password">Password: </label><label style="font-weight: bold;color:red">HARUS MINIMAL 8 KARAKTER</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-groups">
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button class="btns" style="margin: 10px 0px 10px 100px; color: rgb(255, 255, 255)">Sign Up</button>
    </form>
</div>
@endsection
