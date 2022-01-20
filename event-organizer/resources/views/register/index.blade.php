<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

    <title>MYEOU | {{ $title }}</title>
  </head>
  <body>
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <!-- alert -->
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <h4 class="title text-center mt-4">
                     {{ $title }}
                    </h4>
                    <form action="/register" method="post" class="form-box px-3">
                        @csrf
                        <!-- name -->
                        <div class="form-input">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="name" name="name" placeholder="name" tabindex="10" class="@error('name') is-invalid @enderror" required>
                        </div>
                        <!-- Username -->
                        <div class="form-input">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="usename" name="username" placeholder="Username" tabindex="10" class="@error('username') is-invalid @enderror" required>
                        </div>
                        <!-- Email -->
                        <div class="form-input">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="email" placeholder="Email" tabindex="10" required>
                        </div>
                        <!-- Password -->
                        <div class="form-input">
                            <span><i class="fa fa-key"></i></span>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-key"></i></span>
                            <input type="password" name="password2" placeholder="Confirm Password" required>
                        </div>
  
                        <!-- login button -->
                        <div class="mb-3 text-center">
                            <button class=" w-50 btn btn-block text-uppercase" Type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>