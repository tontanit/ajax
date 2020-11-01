<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>AJAX KIEU 1</title>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#username').blur(function(){
            var username = $(this).val();
            $.get('ktuser.php',{un:username}, function(data){
                
                if(data==0){
                    $('#nhacloi').html('Hop le');
                   
                } else {
                    $('#nhacloi').html('Khong hop le');
                }


            });

        });


      });
        
       
    </script>
</head>
<body>
    <h1>ĐĂNG KÝ THÀNH VIÊN</h1>
    <form action="" method="post">
       <label for="">Tài Khoản</label>
       <input type="text" name="username" id="username">

       <div id="nhacloi" style="color:red"></div>

       <label for="">Password</label>
       <input type="password" name="Password" id="Password">
       <input type="submit" value="Đăng Nhập" id="dangnhap">
    
    
    
    </form>
</body>
</html>