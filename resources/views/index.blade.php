
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel x Kunber</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">
    <link href="/app.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="alert alert-info small my-3">
        User demo
        <ul class="mb-0">
            <li>
            email: <code>demo@example.com</code>
            </li>
            <li>
            password: <code>demo123</code>
            </li>
        </ul>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="demo@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="demo123">
      <label for="floatingPassword">Password</label>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger small">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="my-3 text-center text-muted">OR</p>
    @if (session('kunber_error'))
    <div class="alert alert-danger small">
        {{ session('kunber_error') }}
    </div>
    @endif
    <a href="https://kunber.zone.id/onboarding/{{env('KUNBER_APP_ID')}}?callback_url=http://localhost:8000/authorize_kunber" class="btn btn-outline-primary w-100 py-2">
        Continue with Kunber &nearr;
    </a>
    <p class="mt-5 mb-3 text-body-secondary">&copy; Laravel x Kunber</p>
  </form>
</main>
    </body>
</html>
