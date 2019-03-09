
 <?php include_once 'includes/templates/header.php' ;?> 


 <section class="seccion contenedor">
     <h2>Calendario de Eventos</h2>

    <?php      
      try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT `id_evento`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
          $sql .= "FROM `eventos` ";
          $sql .= "INNER JOIN `categoria_evento` ";
          $sql .= "ON eventos.id_categoria = categoria_evento.id_categoria ";
          $sql .= "INNER JOIN `invitados` ";
          $sql .= "ON eventos.id_invitado = invitados.id_invitado "; 
          $sql .= "ORDER BY `id_evento` ";
          $resultado = $conn->query($sql);
      } catch (Exception $e) {
          $error = $e->getMessage();
      }
    ?>

    <?php while ($eventos = $resultado->fetch_all(MYSQLI_ASSOC) ) { ?>
      
       <?php foreach ($eventos as $evento):  ?>
           <div class="dia">
             <p class="titulo"><?php echo utf8_encode($evento['nombre_evento']); ?></p>
             <p class="horaFecha"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $evento['fecha_evento'] . " " . $evento['hora_evento'] . " hrs"; ?></p>
           </div>
       <?php endforeach; ?>

       <pre>
       <?php var_dump($eventos);  ?>
       </pre>
    <?php }?>
</section> <!--Seccion-->


 <?php include_once 'includes/templates/footer.php' ;?>