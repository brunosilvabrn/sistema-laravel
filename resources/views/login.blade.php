<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Sistema</title>
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center">
    <div class="card shadow mt-5" style="width: 400px;">
      <div class="card-body p-4">
        @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                  <p class="text-center m-0">{{ $error }}</p>
              @endforeach
            </div>
        @endif
        <h1 class="card-title text-center p-2">LOGIN</h1>
        <form method="POST" action="{{route('auth.user')}}">
          @csrf

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuário ou Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="text-center p-3"> 
            <button type="submit" class="btn btn-primary w-50">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>