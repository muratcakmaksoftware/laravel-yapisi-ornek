<html>

    <form action="/login" method="post">       
        @csrf
        Kullanıcı Adı: <input type="text" name="kuladi">
        <br/>
        Şifre: <input type="text" name="pw">
        <br/>
        <input type="submit" value="Giriş Yap">
    </form>

</html>