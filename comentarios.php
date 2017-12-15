  <?php
recolectar_datos();
que_facultad($facultad);
ordenar_mensaje($destino, $nombre, $correo, $mensaje);
mandar_mensaje($destino, $mensaje);
regresar_index();

//FUNCIONES
funtion recolectar_datos()
{
  $nombre= $_POST["nombre"];
  $correo = $_POST["email"];
  $mensaje = $_POST["message"];
  $facultad = $_POST["facultad"];
}
funtion que_facultad($facultad)
{
  switch ($facultad)
  {
    case '1':
      $destino = "facultad_admin@correo.com";
      break;

    case '2':
        $destino = "facultad_quimica@correo.com";
        break;
  }
  return $destino;
}
funtion ordenar_mensaje($destino, $nombre, $correo, $mensaje)
{
  $mensaje = "De: " . $nombre. "\nCorreo: ". $correo . "\n" . $mensaje;

}
funtion mandar_mensaje($destino, $mensaje)
{
  mail($destino, "Equidad de genero UV", $mensaje);
}
funtion regresar_index()
{
  header ("Location: index.html");
}
 ?>
