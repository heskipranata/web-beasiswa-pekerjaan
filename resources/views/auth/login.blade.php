<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - ScholarJob</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #0d6efd, #1e90ff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin: 0;
    }

    .brand {
      font-weight: 700;
      font-size: 2.5rem;
      color: #fff;
      margin-bottom: 40px;
      letter-spacing: 2px;
      user-select: none;
    }

    .brand span {
      color: #ffc107;
    }

    .login-card {
      background: #fff;
      padding: 2.5rem 2rem;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 380px;
    }

    .form-control::placeholder {
      color: #aaa;
    }

    .form-icon {
      position: relative;
    }

    .form-icon i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #888;
    }

    .form-icon input {
      padding-left: 2.2rem;
    }

    .btn-primary {
      font-weight: 500;
    }

    a.text-primary:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="brand">Scholar<span>Job.</span></div>

  <div class="login-card">
    <div class="text-center mb-4">
      <h5 class="text-primary fw-semibold">Masuk ke Dashboard</h5>
      <p class="text-muted fs-6 mb-0">Gunakan akun admin Anda</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-icon mb-3">
        <i class="bi bi-envelope-fill"></i>
        <x-text-input id="email" type="email" name="email" :value="old('email')" class="form-control" placeholder="Email" required autofocus />
        <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
      </div>

      <div class="form-icon mb-3">
        <i class="bi bi-lock-fill"></i>
        <x-text-input id="password" type="password" name="password" class="form-control" placeholder="Kata Sandi" required />
        <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1" />
      </div>



      <div class="d-grid mt-3">
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-box-arrow-in-right me-1"></i> Masuk
        </button>
      </div>

    </form>

    <div class="text-center mt-3">
      <a href="{{ url('/') }}" class="text-decoration-none text-primary">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
