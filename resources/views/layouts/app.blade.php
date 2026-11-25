<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/afavicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/afavicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('public/asite.webmanifest') }}">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/css/custom.css') }}">

    <style>
        body,
        p,
        {
        background: #F9FAFC;
        font-family: "Rubik", sans-serif !important;
        }



        /* Navigation Font */
        .nav-link {
            font-family: "Racing Sans One", sans-serif;
            font-size: 17px;
            line-height: 30px;
            letter-spacing: 1px;
            font-weight: 400;
            color: #7d7d7d !important;
            position: relative;
            padding-bottom: 6px;
        }

        /* Hover */
        .nav-link:hover {
            color: #262626 !important;
        }

        /* Active text */
        .nav-link.active {
            color: #262626 !important;
        }

        /* FIXED: Active underline using ::before (NOT ::after) */
        .nav-link.active::before {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -4px;
            width: 100%;
            height: 4px;
            background-color: #CF1D2B;
            border-radius: 2px;
        }

        ul.dropdown-menu.show {
            font-family: "Racing Sans One", sans-serif;
            font-size: 14px;
            line-height: 25px;
            letter-spacing: 1px;
            font-weight: 400;
            color: #7d7d7d !important;
            position: relative;
            padding-bottom: 6px;
        }

        /* Remove underline from dropdown items */
        .dropdown-item::before {
            display: none !important;
        }


        a.dropdown-item.active {
            background-color: #CF1D2B;

        }

        .donate-btn {
            font-family: "Racing Sans One", sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
            line-height: 30px;
        }

        .navbar-brand img {
            height: 70px;
        }

        .section-img {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    @include('components.navbar')

    @yield('content')
    @include('components.instagram')
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
