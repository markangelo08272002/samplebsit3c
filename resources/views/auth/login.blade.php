<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body, html { margin: 0; padding: 0; height: 100%; font-family: Arial, sans-serif; background: #f0f2f5; }
        .login-container { display: flex; justify-content: center; align-items: center; height: 100%; }
        .login-card { background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        .login-card h2 { margin-bottom: 1.5rem; color: #333; text-align: center; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; color: #555; }
        .form-group input { width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; font-size: 1rem; }
        .form-group input:focus { outline: none; border-color: #007BFF; }
        .form-check { display: flex; align-items: center; }
        .form-check input { margin-right: 0.5rem; }
        .btn-primary { width: 100%; padding: 0.75rem; background: #007BFF; border: none; border-radius: 4px; color: #fff; font-size: 1rem; cursor: pointer; }
        .btn-primary:hover { background: #0056b3; }
        .forgot-link { display: block; margin-top: 0.75rem; text-align: right; font-size: 0.9rem; color: #007BFF; text-decoration: none; }
        .forgot-link:hover { text-decoration: underline; }
        .register-link { display: block; margin-top: 1rem; text-align: center; font-size: 0.9rem; color: #555; }
        .register-link a { color: #007BFF; text-decoration: none; }
        .register-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                    @error('email')
                        <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required />
                    @error('password')
                        <span style="color: #e74c3c; font-size: 0.9rem;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                    <label for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn-primary">Login</button>
                @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                @endif
            </form>
            <div class="register-link">
                Don't have an account? <a href="{{ route('register') }}">Register here</a>
            </div>
        </div>
    </div>
</body>
</html>
