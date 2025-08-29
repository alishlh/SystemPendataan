<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Exit to Qatar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1a56db;
            --secondary-blue: #0e4bbb;
            --light-blue: #e1effe;
            --dark-blue: #1e3a8a;
            --accent-blue: #3b82f6;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --info: #3b82f6;
            --light: #f8fafc;
            --dark: #1e293b;
            --gradient-start: #1a56db;
            --gradient-end: #0e4bbb;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            font-size: 0.9rem;
            background-color: #f8fafc;
            color: #334155;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            position: relative;
            padding: 20px;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.15) 0%, transparent 25%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 40% 40%, rgba(255, 255, 255, 0.08) 0%, transparent 25%);
            z-index: -1;
        }
        
        .login-container {
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.6s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(255, 255, 255, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        
        .login-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            opacity: 0.9;
        }
        
        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(255, 255, 255, 0.1);
        }
        
        .login-header {
            background: linear-gradient(90deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: white;
            padding: 2rem 2rem 1.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.15) 0%, transparent 20%);
            transform: rotate(30deg);
        }
        
        .login-brand {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }
        
        .login-brand img {
            height: 70px;
            width: 70px;
            margin-bottom: 12px;
            object-fit: contain;
            filter: brightness(0) invert(1);
            transition: transform 0.3s ease;
        }
        
        .login-brand:hover img {
            transform: scale(1.05);
        }
        
        .login-brand h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 0.5px;
        }
        
        .login-header p {
            opacity: 0.9;
            margin-bottom: 0;
            font-size: 0.95rem;
            position: relative;
            z-index: 1;
        }
        
        .login-body {
            padding: 2rem 2rem 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        
        .form-control {
            border-radius: 12px;
            border: 1.5px solid #e2e8f0;
            padding: 0.85rem 1rem;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            height: auto;
            background-color: #f8fafc;
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(26, 86, 219, 0.1);
            background-color: #fff;
        }
        
        .input-group-text {
            background-color: #f8fafc;
            border-radius: 12px 0 0 12px;
            border: 1.5px solid #e2e8f0;
            border-right: none;
            padding: 0.85rem 1rem;
            color: #64748b;
            transition: all 0.3s ease;
        }
        
        .form-control:focus + .input-group-text,
        .form-control:focus ~ .input-group-text {
            border-color: var(--primary-blue);
            color: var(--primary-blue);
            background-color: #fff;
        }
        
        .password-toggle {
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-left: none;
            border-radius: 0 12px 12px 0;
            cursor: pointer;
            padding: 0.85rem 1rem;
            color: #64748b;
            transition: all 0.2s ease;
        }
        
        .password-toggle:hover {
            color: var(--primary-blue);
            background-color: #fff;
        }
        
        .form-check-input {
            width: 1.1em;
            height: 1.1em;
            margin-top: 0.15em;
            border-radius: 6px;
            border: 1.5px solid #d1d5db;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        
        .form-check-input:focus {
            box-shadow: 0 0 0 3px rgba(26, 86, 219, 0.1);
        }
        
        .form-check-label {
            font-size: 0.9rem;
            color: #64748b;
            cursor: pointer;
        }
        
        .btn-login {
            background: linear-gradient(90deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 1rem 1.5rem;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(26, 86, 219, 0.2);
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
            margin-top: 0.5rem;
        }
        
        .btn-login::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(26, 86, 219, 0.3);
        }
        
        .btn-login:hover::before {
            left: 100%;
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .login-footer {
            text-align: center;
            padding: 1.5rem 2rem;
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }
        
        .login-footer p {
            margin-bottom: 0;
            color: #64748b;
            font-size: 0.85rem;
        }
        
        .login-footer a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            position: relative;
        }
        
        .login-footer a::after {
            content: "";
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1.5px;
            background: var(--primary-blue);
            transition: width 0.3s ease;
        }
        
        .login-footer a:hover {
            color: var(--secondary-blue);
        }
        
        .login-footer a:hover::after {
            width: 100%;
        }
        
        /* Alert styling */
        .alert {
            border-radius: 12px;
            border: none;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            padding: 0.85rem 1rem;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .alert-danger {
            background-color: #fef2f2;
            color: #b91c1c;
            border-left: 4px solid #ef4444;
        }
        
        .alert-success {
            background-color: #f0fdf4;
            color: #065f46;
            border-left: 4px solid #10b981;
        }
        
        .is-invalid {
            border-color: #ef4444 !important;
        }
        
        .is-invalid:focus {
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1) !important;
        }
        
        .invalid-feedback {
            display: block;
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.5rem;
        }
        
        /* Animation for form elements */
        .form-group {
            animation: slideIn 0.5s ease-out;
        }
        
        .form-group:nth-child(1) {
            animation-delay: 0.1s;
        }
        
        .form-group:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Animasi dan efek dari contoh */
        .shake {
            animation: shake 0.5s;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        .loading-spinner {
            border: 2px solid #f3f3f3;
            border-top: 2px solid white;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            animation: spin 0.6s linear infinite;
            display: inline-block;
            vertical-align: middle;
            margin-left: 8px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.3);
            border-color: #4299e1;
        }
        
        /* Responsive styling */
        @media (max-width: 576px) {
            .login-container {
                padding: 10px;
            }
            
            .login-header, .login-body {
                padding: 1.5rem;
            }
            
            .login-brand h2 {
                font-size: 1.5rem;
            }
            
            .login-brand img {
                height: 60px;
                width: 60px;
            }
            
            .login-footer {
                padding: 1.2rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-brand">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBmaWxsPSIjZmZmIj48cGF0aCBkPSJNNDggMjU2YzAtMTE0LjkgOTMuMS0yMDggMjA4LTIwOHMyMDggOTMuMSAyMDggMjA4LTkzLjEgMjA4LTIwOCAyMDhTMjggMzcwLjkgNDggMjU2em0xNzAgNzJsLTYwLTYwIDYwLTYwIDYwIDYwLTYwIDZ6Ii8+PC9zdmc+" alt="Logo">
                    <h2>Exit to Qatar</h2>
                </div>
                <p>Silakan masuk untuk mengakses dashboard</p>
            </div>
            
            <div class="login-body">
                <!-- Alert untuk pesan sukses -->
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Alert untuk pesan error -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ $errors->first() }}
                    </div>
                @endif

                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('status') }}
                    </div>
                @endif
                
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control input-focus @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan email">
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input id="password" type="password" class="form-control input-focus @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan password">
                            <span class="password-toggle" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Ingat saya</label>
                    </div>
                    
                    <button id="submitBtn" type="submit" class="btn btn-login">
                        <span>Masuk</span>
                    </button>
                </form>
            </div>
            
            <div class="login-footer">
                @if (Route::has('password.request'))
                    <p>Lupa password? <a href="{{ route('password.request') }}">Reset di sini</a></p>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Toggle eye icon
                    const eyeIcon = this.querySelector('i');
                    eyeIcon.classList.toggle('fa-eye');
                    eyeIcon.classList.toggle('fa-eye-slash');
                });
            }

            // Shake on error
            @if($errors->any())
                document.getElementById('loginForm').classList.add('shake');
            @endif

            // Button loading
            document.getElementById('loginForm').addEventListener('submit', function() {
                const btn = document.getElementById('submitBtn');
                btn.disabled = true;
                btn.innerHTML = 'Signing in <span class="loading-spinner"></span>';
            });
        });
    </script>
</body>
</html>