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
      <style>
        .navbar-nav .nav-link {
            font-size: 20px; /* Menyesuaikan ukuran teks */
        }
    </style>
</head>
<body>
    <header>
      <style>
        .navbar-nav .nav-link, .dropdown-menu .dropdown-item {
            font-size: 20px; /* Menyesuaikan ukuran teks */
        }
    </style>
</head>
<body>
    <header>
      <style>
        .navbar-nav .nav-link, .dropdown-menu .dropdown-item {
            font-size: 20px; /* Menyesuaikan ukuran teks */
        }

        .dropdown-menu {
            margin-left: -15px; /* Menggeser dropdown ke kiri */
        }
    </style>
</head>
<body>
    <header>
        <!-- Header dengan logo dan navigasi -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="image/kemenag1.png" width="auto" height="63">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Hubungi Kami</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Pusaka Kemenag RI</a></li>
                      <li><a class="dropdown-item" href="#">Srikandi</a></li>
                      <li><a class="dropdown-item" href="#">E-kinerja</a></li>
                      <li><a class="dropdown-item" href="#">Panduan Haji & Umrah</a></li>
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
    
    @include('includes.footer')
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

          // Gunakan fetch API untuk mengirim permintaan logout
          fetch(form.action, {
              method: 'POST',
              body: new FormData(form)
          }).then(response => {
              if (response.ok) {
                  // Logout berhasil, ubah teks tombol menjadi Login
                  document.getElementById("logoutButton").innerText = "Login";
                  // Arahkan ke halaman login
                  window.location.href = "{{ route('login') }}";
              } else {
                  // Tangani kesalahan jika logout gagal
                  alert('Logout gagal. Silakan coba lagi.');
              }
          }).catch(error => {
              console.error('Error:', error);
              alert('Logout gagal. Silakan coba lagi.');
          });
      });
  </script>
</body>

</html>
