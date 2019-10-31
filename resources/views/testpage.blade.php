<html>
<form action="" method="post">
    <?php
        /*
        // extra farklı yazdırma yöntemi    
        {{$myid}} 

        @foreach($data["uyeler"] as $uye)
            {{$uye["isim"]}}
        @endforeach*/

    ?>
    <?php 
        echo var_dump($data);                
        echo "<br/>";
        echo var_dump($data["myid"]);
    ?>



    <br/>
    {{csrf_field()}}
    Başlık: <input type="text" name="baslik">
    <br/>
    İçerik: <input type="text" name="icerik">
    <br/>
    <input type="submit">
</form>
</html>