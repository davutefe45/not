<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<?php
    $ogrenciler=Array(
        Array('ogrencino'=>3568,'adi'=>'Mert','soyadi'=>'Tarhan','cinsiyeti'=>'Erkek'),
        Array('ogrencino'=>3569,'adi'=>'Ömer','soyadi'=>'Faruk','cinsiyeti'=>'Erkek'),
    );

    echo '<table border=1>';
    echo '<tr><td>Öğrenci No</td><td> Adı</td><td>Soyadı</td><td>Cinsiyeti</td></tr>';
    foreach($ogrenciler as $idx1 => $satir){
        echo '<tr><td class="liste" data-ogrno="'.$satir['ogrencino'].'">'.$satir['ogrencino'].'</td><td>'.$satir['adi'].'</td><td>'.$satir['soyadi'].'</td><td>'.$satir['cinsiyeti'].'</td></tr>';

    }
echo'</table>';
?>

<script>
    $(document).ready(function(){
        $(".liste").on("click",function(){
            let ogrencino=$(this).data("ogrno");
            alert(ogrencino)
        
        });
    });
</script>
</body>
</html>
