<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script>
     
        $(document).ready(function(){
            $("#tinh").click(function(){
                var txta = $("#txta").val();
                var txtb = $("#txtb").val();
                $.get("b.php",{a:txta, b:txtb},function(data){
                    $("#ketqua").html(data);


                });

            });

        });
        
    </script>
</head>
<body>
    <div>
        
            <label>Nhập số a</label>
            <input id="txta" type="text" name="txta">
            <label for="">Nhập số b</label>
            <input id="txtb" type="text" name="txtb">
            <input id="tinh" type="button" value="Tính tổng">
       
    </div>
     <p></p>
    <h2 id="ketqua"></h2>
    <div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Xz0p8i1BUcs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
   
</body>
</html>