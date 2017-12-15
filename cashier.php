<?php
include ("konek.php");
session_start();

if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Input Kasir Optik Plus</title>
        <link href="indah.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <h1>Optik Plus</h1>
        <p>CITO FS 38 No. 01 & 02 Surabaya Telp 082335099959</p>
        <p>Jl. Akim Kayat No. 2 Gresik Telp 081213719717</p>
        <p><a href ="logout.php"><input type="submit" name="logout" value="Logout" /></a></p> 
        <form action="proses_cashier.php" method="post">
        
		<fieldset> 
		
            <legend><b>Info Pelanggan</b></legend>
               
                <ul class="form-style-1">
                    <li><label>Nama <span class="required">*</span></label><input type="text" name="nama" class="field-divided" placeholder="Nama" />
                    </li>
                    <li>
                        <label>Alamat Perusahaan <span class="required">*</span></label>
                        <textarea name="alamat" id="field-alamat" class="field-long field-textarea"></textarea>
                    </li>   
                
                    <li>
                        <label>Alamat Pembeli <span class="required">*</span></label>
                        <textarea name="alamatPembeli" id="field-alamatPembeli" class="field-long field-textarea"></textarea>
                    </li>
                
                    <li>
                        <label>Nomor Telepon <span class="required">*</span></label><input type="text" name="telepon" class="field-divided" placeholder="Nomor Telepon" />
                    </li>
                </ul>
        </fieldset>

        <fieldset> 
            <legend><b>Input Kacamata</b></legend>
                
                <ul class="form-style-1">
                    <li>
                        <label>Jenis Frame<span class="required">*</span></label>
                        <select name="jenis">    
                        <option value="nike">Nike</option>    
                        <option value="adidas">Adidas</option>    
                        <option value="leecoper">LeeCooper</option>  
                    </select>
                    </li>

                    <li>
                        <label>Quantity <span class="required">*</span></label>
                        <select name="jumlah">    
                        <option value="Satu">1</option>    
                        <option value="Dua">2</option>    
                        <option value="Tiga">3</option>  
                    </select>
                    </li>   
                
                    <li>
                        <label>Harga <span class="required">*</span></label><input type="text" name="harga" class="field-divided" placeholder="Harga" />
                    </li>
                
                    <li>
                        <label>Tipe Lensa <span class="required">*</span></label>
                        <select name="devices">    
                        <option value="antiembun">Anti Embun</option>    
                        <option value="antiradiasi">Anti Radiasi</option>  
                        </select> 
                    </li>  

                    <li>
                        <label>Jenis Lensa <span class="required">*</span></label>
                        <select name="plusminus">    
                        <option value="plus">Plus</option>    
                        <option value="minus">Minus</option>  
                        <option value="silinder">Silinder</option>
                        </select> 
                    </li>

                    <li>
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                            <td><p><b>SP</b><span class="required">*</span></p></td>
                            <td><p><b>CYL</b><span class="required">*</span></p></td>
                            <td><p><b>AXIS</b><span class="required">*</span></p></td>
							<td><p><b>ADD</b><span class="">*</span></p></td>
							<td><p><b>∆</b><span class="">*</span></p></td>
							<td><p><b>BASE</b><span class="">*</span></p></td>
							<td><p><b>ф</b><span class="">*</span></p></td>
                            </tr>
                
                            <tr>
                            <td><input type="text" name="spkanan" class="field-divided" placeholder="Kanan" /></td>
                            <td><input type="text" name="cylkanan" class="field-divided" placeholder="Kanan" /></td>
                            <td><input type="text" name="axiskanan" class="field-divided" placeholder="Kanan" /></td>
                            <td><input type="text" name="addkanan" class="field-divided" placeholder="Kanan" /></td>
                            <td><input type="text" name="∆kanan" class="field-divided" placeholder="Kanan" /></td>
                            <td><input type="text" name="basekanan" class="field-divided" placeholder="Kanan" /></td>
                            <td><input type="text" name="фkanan" class="field-divided" placeholder="Kanan" /></td>
                            </tr>

                            <tr>
                            <td><input type="text" name="spkiri" class="field-divided" placeholder="Kiri" /></td>
                            <td><input type="text" name="cylkiri" class="field-divided" placeholder="Kiri" /></td>
                            <td><input type="text" name="axiskiri" class="field-divided" placeholder="Kiri" /></td>
                            <td><input type="text" name="addkiri" class="field-divided" placeholder="Kiri" /></td>
                            <td><input type="text" name="∆kiri" class="field-divided" placeholder="Kiri" /></td>
                            <td><input type="text" name="basekiri" class="field-divided" placeholder="Kiri" /></td>
                            <td><input type="text" name="фkiri" class="field-divided" placeholder="Kiri" /></td>
                            </tr>
                        </table>
                    </li>
                </ul>  
        </fieldset>

        <fieldset> 
            <legend><b>Jenis Pembayaran</b></legend>
                
                <ul class="form-style-1">
                    <li>
                        <label>DP <span class="required">*</span></label><input type="text" name="Rpdp" class="field-divided" placeholder="Rp" />
                    </li>

                    <li>    
                        <label>Sisa <span class="required">*</span></label><input type="text" name="Rpsisa" class="field-divided" placeholder="Rp" />
                    </li>

                    <li>    
                        <label>Total <span class="required">*</span></label><input type="text" name="Rptotal" class="field-divided" placeholder="Rp" />
                    </li>

                    <p>
                        <select name="kriteria">
                        <option value="Lunas" selecte"selected">Lunas</option>
                        <option value="Tidak Boy">Tidak Lunas</option>
                        </select>
                    </p> 
                </ul> 

        </fieldset>  
        <p>
            <label><b>Kasir</b><span class="required">*</span></label>
            <?php  
            $query = "SELECT * FROM users WHERE status = 'cashier'";
            $list=mysqli_query($link, $query);
                if(!$list){
                    die("Query gagal : ".mysqli_errno($link)." - ".mysqli_error($link));
            }

            $select= '<select name="namakasir">';
            while($rs=mysqli_fetch_array($list)){
                $select.='<option value="'.$rs['name'].'">'.$rs['name'].'</option>';
                }
            $select.='</select>';
            echo $select;
            ?>
        </p>  
        <p><input type="submit" name="simpan" value="Simpan" /></p> 
        </form>
    </body>
</html>