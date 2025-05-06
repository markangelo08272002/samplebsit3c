<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body, html { margin: 0; padding: 0; height: 100%; font-family: Arial, sans-serif; background: #f0f2f5; }
        .register-container { display: flex; justify-content: center; align-items: center; height: 100%; }
        .register-card { background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 450px; }
        .register-card h2 { margin-bottom: 1.5rem; color: #333; text-align: center; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; color: #555; }
        .form-group input { width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; font-size: 1rem; }
        .form-group input:focus { outline: none; border-color: #007BFF; }
        .btn-primary { width: 100%; padding: 0.75rem; background: #007BFF; border: none; border-radius: 4px; color: #fff; font-size: 1rem; cursor: pointer; }
        .btn-primary:hover { background: #0056b3; }
        .error-message { color: #e74c3c; font-size: 0.9rem; margin-top: 0.25rem; }
        .login-link { display: block; margin-top: 1rem; text-align: center; font-size: 0.9rem; color: #555; }
        .login-link a { color: #007BFF; text-decoration: none; }
        .login-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus />
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required />
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required />
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required />
                </div>
                <button type="submit" class="btn-primary">Register</button>
            </form>
            <div class="login-link">
                Already have an account? <a href="{{ route('login') }}">Login here</a>
            </div>
        </div>
    </div>
</body>
</html>
