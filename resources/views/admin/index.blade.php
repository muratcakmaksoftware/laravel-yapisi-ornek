<!DOCTYPE html>

<html>

<head>

    <title>Admin Panel</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <?php echo "Hoşgeldin,".session("isim");  ?>
    
    <div style="float:right;margin-right:10px;"><button class="btn btn-secondary btn-submit" id="logout">Log out</button></div>
    <div class="container">

        <h1>ADMİN PANEL</h1>



        <form >        
  

            <div class="form-group">

                <label>İsim:</label>

                <input type="text" name="isim" class="form-control" placeholder="İsim" required="">

            </div>

  

            <div class="form-group">

                <label>Yaş:</label>

                <input type="numeric" name="yas" class="form-control" placeholder="Yaş" required="">

            </div>

   

            <div class="form-group">

                <strong>Kullanıcı Adı:</strong>

                <input type="text" name="kuladi" class="form-control" placeholder="Kullanıcı Adı" required="">

            </div>

   

            <div class="form-group">

                <button class="btn btn-success btn-submit" id="uyeKaydet">Kaydet</button>

            </div>

        </form>

    </div>

</body>

<script type="text/javascript">

   
    
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   
    /*
    $(".btn-submit").click(function(e){

        var name = $("input[name=name]").val();

        var password = $("input[name=password]").val();

        var email = $("input[name=email]").val();

   

        $.ajax({

           type:'POST',

           url:'/ajaxRequest',

           data:{name:name, password:password, email:email},

           success:function(data){

              alert(data.success);

           }

        });

    });*/
    
    $("#logout").click(function(e){
        $.ajax({

            type:'POST',

            url:'/admin/index',

            data:{protocol:'logout'}, // , password:password, email:email

            success:function(data){
                //alert(data.success);
                if(data.success == "logoutok"){ // session bilgileri silindi php sayfasından ve
                    location.reload(); // sayfayı yenileyip php sayfasında kontrol edilmiş olacak sessionlar olmadığından login sayfasına yönlendirecek.
                }

            }

        });
    });

    $("#uyeKaydet").click(function(e){
        $.ajax({

            type:'POST',

            url:'/admin/index',

            data:{protocol:'uyekayıt', isim: $("input[name=isim]").val(), yas:$("input[name=yas]").val(), kuladi:$("input[name=kuladi]").val()}, // , password:password, email:email

            success:function(data){

                if(data.success == "kayitok"){
                    alert("Başarıyla Kaydedildi.");
                }

            }

        });
    });

</script>

   

</html>