<!DOCTYPE html>
<html>
<head>
    <title>Tabel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Tabel</h1>

    <table>
        <thead>
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
                <th>Kolom 4</th>
                <th>Kolom 5</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td>Data {{ $i }}-1</td>
                    <td>Data {{ $i }}-2</td>
                    <td>Data {{ $i }}-3</td>
                    <td>Data {{ $i }}-4</td>
                    <td>Data {{ $i }}-5</td>
                </tr>
            @endfor
        </tbody>
    </table>
</body>
</html>
