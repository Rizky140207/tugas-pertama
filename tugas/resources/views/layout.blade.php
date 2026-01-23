<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero {
            background: linear-gradient(120deg, #0d6efd, #6610f2);
            color: white;
            padding: 80px 0;
        }
        .product-card {
            transition: 0.3s;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .price {
            font-weight: 600;
            color: #0d6efd;
        }
        .old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 14px;
        }
    </style>
</head>
<body class="bg-light">
    @include('navbar')


@yield('content')
<!-- FOOTER -->
<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
