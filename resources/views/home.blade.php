<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            background-color: #40E0D0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px;
            margin-bottom: 20px;
        }

        .navbar-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .navbar-options {
            display: flex;
        }

        .navbar-options a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        
        .content-area {
            width: 100%;
            height: 400px; /* Sesuaikan tinggi sesuai kebutuhan */
            background-color: #808080; /* Ubah warna latar belakang menjadi hijau */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a>GREENLAND RESIDENCE</a>
            <div class="navbar-options">
                <a href="{{ route('expenses') }}">Pengeluaran</a>
                <a href="{{ route('income') }}">Pemasukan</a>
                <div class="navbar-icon">&#x1F464;</div>
            </div>
        </div>

        <div class="content-area">
            <!-- Konten di dalam kotak -->
            GREENLAND RESIDENCE OFFICE
        </div>
    </div>
</body>
</html>
