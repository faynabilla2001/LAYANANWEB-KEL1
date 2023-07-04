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

        .form-container {
            margin-bottom: 20px;
        }

        .form-container input {
            margin-bottom: 10px;
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        .save-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
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

        <div class="form-container">
            <form method="POST" action="{{ route('save') }}">
                @csrf
                <a>Pengeluaran</a>
                <input type="text" name="input1" placeholder="Input 1">
                <input type="text" name="input2" placeholder="Input 2">
                <input type="text" name="input3" placeholder="Input 3">
                <input type="text" name="input4" placeholder="Input 4">
                <button type="submit" class="save-btn">Save</button>
            </form>
        </div>
    </div>
</body>
</html>
