<?PHP
 $datos=mysqli_connect("127.0.0.1","root","9595","bdumaee") or die(mysql_error(mysqli));
 function botones($datos){
    if(isset($_POST["captura"])){
        insertar($datos);
    }
    if(isset($_POST["busqueda"])){
        busqueda($datos);
    }
 }
 insertar($datos);
 function insertar($datos){
    $codigo_producto=$_POST["codigo_producto"];
    $nombre_producto=$_POST["nombre_producto"];
    $unidad_media=$_POST["unidad_media"];
    $marca_producto=$_POST["marca_producto"];
    $precio_venta=$_POST["precio_venta"];
    $costo_compra=$_POST["costo_compra"];

    
?>