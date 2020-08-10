<div class="wrapper">
  <div id="container">
    <div id="content">
      <h2>Generos</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th> Codigo </th>
            <th> Nombre </th>
            <th>  </th>
            <th>  </th>
          </tr>
        </thead>
        <tbody>
            <?php                
                foreach($generos as $posicion => $genero):
            ?>
          <tr class="light">
            <td><?=$genero->getCodigo();?></td>
            <td><?=$genero->getNombre();?></td>
            <td><a href="index.php?controller=generos&action=fomularioEditar&codigo=<?=$genero->getCodigo();?>">Editar</a></td>
          </tr>        
          <?php 
                        endforeach;
                    
           ?>
        
        </tbody>
      </table>
</div>