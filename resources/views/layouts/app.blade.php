<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tambahkan link CSS di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>

    </style>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>

<body>
    <header>
        <!-- Header dengan logo dan navigasi -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="image\kemenag1.png"  width="auto" height="63">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    @csrf
                    <button id="logoutButton" class="btn btn-outline-danger">Logout</button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <!-- Footer dengan informasi tambahan -->
        <div class="footer">
            <!--p>Ini adalah footer.</p -->
        </div>
    </footer>
    <!-- Tambahkan script JavaScript di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Atau sesuaikan dengan script JavaScript yang Anda gunakan -->
    <script>
        document.getElementById("logoutButton").addEventListener("click", function() {
            var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("action", "{{ route('logout') }}");
            var csrfToken = document.createElement("input");
            csrfToken.setAttribute("type", "hidden");
            csrfToken.setAttribute("name", "_token");
            csrfToken.setAttribute("value", "{{ csrf_token() }}");
            form.appendChild(csrfToken);
            document.body.appendChild(form);
            form.submit();
        });
    </script>
</body>

</html>
