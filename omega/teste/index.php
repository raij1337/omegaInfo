<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>

<script type="text/javascript">
        function mostrar_imagem(id){
            $.ajax({
                url:'images.php',
                type:'GET',
                data:{
                    codigoItem:id
                },
                success:function(data){
                    $('.recebe_imagem').html(data);
                }
            });
        }
</script>

<style>
     h1{
         cursor:pointer;
     }
</style>

</head>

<body>

<h1 onclick="mostrar_imagem(1);" >Item 1</h1>
<h1 onclick="mostrar_imagem(2);" >Item 2</h1>
<h1 onclick="mostrar_imagem(3);" >Item 3</h1>

<div class="recebe_imagem" style="width: 200px; height: 300px;" ></div>

</body>

</html>