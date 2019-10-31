<html>

    <head>
        <title>@yield("baslik", "Master Page")</title>
    </head>

    <body>

        <div style="height:50px;width:100%;background-color:red;">
            <center><h3>HEADER</h3></center>
            
        </div>
        Menu
        <div id="menu">
            <a href="/hakkimda">Hakkımda</a>
        </div>

        <div class="icerik">
            @yield("icerik")
        </div>
        
        <div style="height:50px;background-color:gray;width:100%;">
            <center><h3>FOOTER</h3></center>
        </div>

    </body>

</html>