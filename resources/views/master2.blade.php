<!DOCTYPE html>
<html>
<head>
    <title>5026221072 Felicia Evelina Soetjipto</title>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">5026221072 Felicia Evelina Soetjipto</a>

            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
              </li>

              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Database
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/pegawai">Pegawai</a>
                  <a class="dropdown-item" href="/nilaikuliah">Nilai Kuliah</a>
                  <a class="dropdown-item" href="/baju">Baju</a>
                  <a class="dropdown-item" href="/mahasiswa">Mahasiswa</a>
                  <a class="dropdown-item" href="#">Link 3</a>
                </div>
              </li>
            </ul>
          </nav>
        <hr/>
        <br/>
        <br/>

    <!-- bagian judul halaman blog -->
    @yield('judul_halaman')

    <!-- bagian konten blog -->
    @yield('konten')


    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
    </footer>

</body>
</html>
