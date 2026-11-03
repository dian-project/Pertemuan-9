
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dian Project')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f7f8;
            font-family: Arial, sans-serif;
            color: #292929;
        }

        .top-navbar {
            position: sticky;
            top: 0;
            z-index: 1050;
        }

        .top-navbar {
            min-height: 60px;
            background: #1300e4;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 25px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ffffff;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        .brand img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        .top-menu {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .top-menu a {
            color: #fff;
            text-decoration: none;
        }

        .admin-layout {
            display: flex;
            min-height: calc(100vh - 75px);
        }

        .sidebar {
            width: 220px;
            flex-shrink: 0;
            background: #343a40;
            color: white;
        }

        .sidebar-title {
            padding: 25px 18px;
            font-size: 21px;
            font-weight: bold;
        }

        .sidebar a {
            display: block;
            padding: 15px 18px;
            color: #eee;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #252a2e;
            border-left: 4px solid #ffc400;
        }

        .main-content {
            flex: 1;
            min-width: 0;
            padding: 25px;
        }

        .form-card,
        .table-card {
            background: white;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0000000d;
        }

        .form-label {
            font-weight: 600;
        }

        .project-image {
            width: 90px;
            height: 70px;
            object-fit: contain;
        }

        .btn-edit {
            display: inline-block;
            padding: 7px 12px;
            color: #212529;
            background: #ffc400;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-delete {
            padding: 7px 10px;
            color: white;
            background: #dc3545;
            border: none;
            border-radius: 4px;
        }

        @media (max-width: 650px) {
            .admin-layout {
                display: block;
            }

            .sidebar {
                width: 100%;
            }

            .main-content {
                padding: 15px;
            }

            .form-card,
            .table-card {
                padding: 15px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <nav class="top-navbar">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('images/logo_dian-project.png') }}"
                 alt="Logo Dian Project"
                 onerror="this.style.display='none'">
            <span>Dian Project</span>
        </a>

        <div class="top-menu">

    <a href="{{ route('admin.dashboard') }}"
    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
    Dashboard
    </a>

    <div class="dropdown">
        <a href="#"
           class="dropdown-toggle"
           id="adminDropdown"
           data-bs-toggle="dropdown"
           aria-expanded="false">
            Administrator
        </a>

        <ul class="dropdown-menu dropdown-menu-end"
            aria-labelledby="adminDropdown">

            <li>
                <span class="dropdown-item-text">
                    {{ Auth::guard('admin')->user()->email }}
                </span>
            </li>

            <li><hr class="dropdown-divider"></li>

            <li>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        Logout
                    </button>
                </form>
            </li>

        </ul>
    </div>

</div>
    </nav>

    <div class="admin-layout">

    <aside class="sidebar">
      <div class="sidebar-title">Admin Menu</div>

      <a href="{{ route('admin.dashboard') }}"
        class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        Dashboard
      </a>

      <a href="{{ route('admin.projects.index') }}"
       class="{{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
        Data Project
      </a>
    </aside>

        <main class="main-content">
            @yield('content')
        </main>

    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')

</body>
</html>
