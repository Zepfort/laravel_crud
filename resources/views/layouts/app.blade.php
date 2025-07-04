<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRUD Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS for Layout -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            z-index: 100;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .main-content {
            margin-left: 250px;
            padding-top: 1rem; /* Height of the navbar */
        }

        .top-navbar {
            position: fixed;
            top: 0;
            right: 0;
            left: 250px;
            z-index: 99;
        }

        /* Responsive: On smaller screens, hide the sidebar and adjust main content */
        @media (max-width: 992px) {
            .sidebar {
                left: -250px; /* Sembunyikan sidebar di luar layar */
                transition: left 0.3s;
            }
            .sidebar.show {
                left: 0; /* Tampilkan sidebar saat kelas 'show' ditambahkan */
            }
            .main-content {
                margin-left: 0;
            }
            .top-navbar {
                left: 0;
            }
        }
    </style>
</head>
<body id="page-top">

    <!-- Wrapper Utama -->
    <div class="d-flex">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div class="main-content flex-grow-1">

            <!-- Topbar -->
            @include('layouts.navbar')
            <!-- End of Topbar -->

            <!-- Main Page Content -->
            <main class="container-fluid p-4">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Wrapper -->

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
