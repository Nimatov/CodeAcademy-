<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeAcademy - Ro'yxatdan o'tish</title>
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&display=swap');

        body {
            margin: 0;
            padding: 0;
            background: radial-gradient(circle at center, #475862 0%, #36454F 100%);
            font-family: 'Segoe UI', sans-serif;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }

        h2 {
            font-family: 'Kameron', serif;
            font-weight: 700;
            color: #ffffff;
        }

        .auth-card {
            background: rgba(36, 47, 53, 0.65);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 460px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #04AA6D;
            color: #ffffff;
            box-shadow: 0 0 0 4px rgba(4, 170, 109, 0.25);
        }

        .form-control::placeholder {
            color: #b0bec5;
            opacity: 0.6;
        }

        .btn-auth {
            background-color: #04AA6D;
            color: white;
            font-weight: 600;
            padding: 12px;
            border: none;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .btn-auth:hover {
            background-color: #038d5a;
            color: white;
            transform: translateY(-1px);
        }

        .back-link {
            color: #b0bec5;
            text-decoration: none;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #04AA6D;
        }
    </style>
</head>
<body>

<div class="auth-card text-center">
    <div class="mb-3">
        <i class="bi bi-person-plus display-4" style="color: #04AA6D;"></i>
    </div>
    
    <h2 class="mb-2">Ro'yxatdan o'tish</h2>
    <p class="small mb-4" style="color: #b0bec5;">Platformaga qo'shiling va kodlashni boshlang</p>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        
        <!-- Ism-sharif (Name) -->
        <div class="mb-3 text-start">
            <label class="form-label small fw-medium" style="color: #b0bec5;">Ismingiz</label>
            <input type="text" name="name" class="form-control" placeholder="Eshmat" required autocomplete="name">
        </div>

        <!-- Email -->
        <div class="mb-3 text-start">
            <label class="form-label small fw-medium" style="color: #b0bec5;">Email manzilingiz</label>
            <input type="email" name="email" class="form-control" placeholder="example@mail.com" required autocomplete="email">
        </div>

        <!-- Parol -->
        <div class="mb-3 text-start">
            <label class="form-label small fw-medium" style="color: #b0bec5;">Parol yarating</label>
            <input type="password" name="password" class="form-control" placeholder="Kamida 8 ta belgi" required>
        </div>

        <!-- Parolni tasdiqlash -->
        <div class="mb-4 text-start">
            <label class="form-label small fw-medium" style="color: #b0bec5;">Parolni tasdiqlang</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••" required>
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-auth w-100 mb-3">Ro'yxatdan o'tish</button>
    </form>

   <!-- Блок переключения на страницу логина -->
    <div class="mt-4 pt-3 border-top border-secondary border-opacity-25 small text-muted d-flex justify-content-center align-items-center gap-2">
        <span style="color: white;">Akkauntingiz bormi?</span> 
        <a href="{{ url('/login') }}" class="fw-bold" style="color: #04AA6D; text-decoration: none;">Tizimga kirish</a>
    </div>
    
    <div class="mt-3">
        <a href="{{ url('/') }}" class="small back-link"><i class="bi bi-arrow-left me-1"></i> Bosh sahifaga qaytish</a>
    </div>
</div>

</body>
</html>