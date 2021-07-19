<!DOCTYPE html>
<html>
<head>
    <title>MBKM</title>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        h1{            
            text-align: center;
            margin-bottom: 100px;
        }
        .box{
            width: 600px;          
            margin: 10px auto;
            text-align: center
        }
        .hasil{
            background: blue;
            color: #fff;
            padding: 10px 0px;
        }
        input[type='text']{
            width: 40px;
        }
        footer {
                font-size: 80%;
                padding: 7px 0px 0px 20px;
                margin-top: 46px;
                clear: both;
                color: white;
                background-color: rgba(22, 46, 222, 0.4);
                height: 30px;
        }
    </style>
 
</head>
<h1>MEMBUAT PROGRAM UNTUK TEST MBKM MAGANG MERDEKA<br/>
<body>
<div class="box">
        <center><h3>MASUKKAN ANGKA<br/>(Ascending, Mean, Median, Multiplication)</h3></center>
    
        <!--form input angka-->
        <form action="" method="post">           
            <input type="text" name="satu">
            <input type="text" name="dua">
            <input type="text" name="tiga">
            <input type="text" name="empat">
            <input type="text" name="lima">
            <input type="text" name="enam">
            <input type="text" name="tujuh">
            <input type="submit" name="submit" value="CARI">
        </form>
 
        <?php  
        //cek submit
        if(isset($_POST['submit'])){
    
            //menangkap data angka yang di input
            $satu=$_POST['satu'];
            $dua=$_POST['dua'];
            $tiga=$_POST['tiga'];
            $empat=$_POST['empat'];
            $lima=$_POST['lima'];
            $enam=$_POST['enam'];
            $tujuh=$_POST['tujuh'];
 
            //masukkan data angka ke array
            $angka=array($satu,$dua,$tiga,$empat,$lima,$enam,$tujuh); 	
 
            //mengurutkan angka dengan fungsi sort()
            sort($angka);  
            echo "</br>";
            echo "<div class='hasil'> URUTAN : ";
            
            //menampilkan isi array angka dengan looping for
            $jumlah=count($angka);  
            for($x=0;$x<$jumlah;$x++)  
            {  
                echo $angka[$x];  
                echo " ";  
            }  	
            echo "<br>";
            echo "</div>";

            //mencari nilai rata-rata
            $tot = $satu+$dua+$tiga+$empat+$lima+$enam+$tujuh;
            $rata = $tot / 7 ;
            echo "<div class='hasil'> RATA2 : $rata";
            echo "<br>";
            echo "</div>";

            //menampilkan nilai tengah
            echo "<div class='hasil'> TENGAH : ";
            $jumlah=count($angka);  
            echo $angka[3];    
            echo "<br>";
            echo "</div>";

            //mencari perkalian
            $kali = $satu*$dua*$tiga*$empat*$lima*$enam*$tujuh;
            echo "<div class='hasil'> KALIAN : $kali";
            echo "<br>";
            echo "</div>";
 
        }
        ?>  
    </div>
<footer>
   &copy; 2021 Dinar
</footer>
</body>
</html>