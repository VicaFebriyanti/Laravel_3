<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
    <style>
        html {
            font-family: 'Quicksand', sans-serif;
            text-align: center;
        }
        .panel {
            width:300px;
            height:500px;
            position:absolute;
            margin:auto;
            left:0;
            right:0;
            top:0;
            bottom:0;
        }
        .bio{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
            text-align:left;
        }
        h3 {
            text-align:center;
        }
        img {
            margin-left:30px;
            width:200px;
        }
        .cpr {
            font-size: 10px;
            margin-top:30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="panel">
    <div class="bio">
        <h3>Vica Pebriyanti Jatnika</h3>
        <img src="https://png.pngtree.com/png-clipart/20190520/original/pngtree-stock-vector-hijab-logo-vector-png-image_4258935.jpg">
        <table>
            <tr>
                <th>Gender</th>                    
                <td>: Perempuan</td>
            </tr>
            <tr>
                <th>TTL</th>
                <td>: Subang, 08-02-2004</td>
            </tr>
            <tr>
                <th>Sekolah</th>
                <td>: SMKN 1 Subang</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>: 12 RPL 1</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>: vicaafy08@gmail.com</td>
            </tr>
        </table>
        <div class="cpr">
            Copyright <?php echo date("Y"); ?> Vicaafy
        </div>
    </div>
    </div>
</body>
</html>

