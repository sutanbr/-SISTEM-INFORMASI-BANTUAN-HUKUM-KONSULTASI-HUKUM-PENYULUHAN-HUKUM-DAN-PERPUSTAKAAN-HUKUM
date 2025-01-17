<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: 'Poppins';
        background-image: url('{{ asset('images/background.login.png') }}');
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        position: fixed;
    }

    .container, .containers {
        background: rgba(255, 255, 255, 0.1); /* Warna putih dengan transparansi */
        backdrop-filter: blur(10px); /* Efek blur pada latar belakang */
        padding: 30px;
        border-radius: 40px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    .containers {
        height: auto;
    }

    .container h2, .containers h2 {
        text-align: center;
        margin-bottom: 20px;
        color: aliceblue;
    }

    .form-groups {
        margin-bottom: 15px;
        color: aliceblue;
        display: flex;
        flex-direction: column;
    }

    .form-groups label {
        margin-bottom: 5px;
    }

    .form-groups input {
        width: 100%;
        padding: 6px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btns {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 50%;
        text-align: center;
    }

    .btns:hover {
        background-color: #414141;
    }

    .forgot-password {
        text-align: center;
        margin-top: 15px;
    }

    .forgot-password a {
        color: #ffffff;
        text-decoration: none;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
@yield('login')
<img src="" alt="">
</body>
</html>