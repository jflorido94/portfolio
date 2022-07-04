<?php
// Veamos si hay mensaje y lo mostramos
if ($msg != "") {
  echo "<div>" . $msg . "</div>";
}
?>

<h1>Formulario de contacto</h1>
<form action="<?php echo base_url(); ?>/contact/sendMail" method="post">

  <input type="text" id="nombre" name="nombre" placeholder="Nombre">
  <input type="text" id="email" name="email" placeholder="Email">
  <input type="text" id="asunto" name="asunto" placeholder="Asunto">
  <textarea name="mensaje" id="mensaje" cols="50" rows="5"></textarea>
  <button type="submit">Enviar</button>
</form>