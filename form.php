<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Optik Plus</title>
        <meta name="viewport" content="width:device-width, initial-scale:1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
		<style>
            body {background-color: lightgrey;}
            h1 {color: black;}
            p {color: black;}
			table, th, td {
                border: 2px solid maroon;
                border-collapse: collapse;
            }
            td {
                padding: 5px;
                text-align: left;
            }
            th{
                padding: 5px;
                text-align: center;
            }
            li a:hover {
                background-color: black;
            }
			input[type="text"] {
				background-color:lightgrey;
				
			}
        </style>
    </head>
    <body>
	<form action = "proses.php" method="post">
        <table>

		<tr>
		
			<th>Nama Barang</th>
			<td>:</td>
			<td><input type="text" name="nama_barang" required="required"/></td>
		</tr>
		<tr>
			<th>Jumlah Barang</th>
			<td>:</td>
			<td><input type="text" name="jumlah_stok" required="required"/></td>
		</tr>
		<tr>
			<th>Harga Beli</th>
			<td>:</td>
			<td><input type="text" name="harga_beli" required="required"/></td>
		</tr>
		<tr>
		<th colspan="3"><input type= "submit" name="submit" value="Kirim"/><a href="data_gudang.php"></a></th>
		</tr>
		</table>
		</form>
    </body>
</html>