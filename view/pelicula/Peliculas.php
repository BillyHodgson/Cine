<div class="wrapper">
  <div id="container">
    <div id="content">
      <h2>Table(s)</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th> Codigo </th>
            <th> Nombre </th>
            <th> Director </th>
            <th> Sinopsis </th>
            <th> Genero </th>
            <th> Puntuacion </th>
            <th> Portada </th>
          </tr>
        </thead>
        <tbody>
            <?php
                
                foreach($peliculas as $posicion => $pelicula):
                        
            ?>
          <tr class="light">
            <td><?=$pelicula->getCodigo();?></td>
            <td><?=$pelicula->getNombre();?></td>
            <td><?=$pelicula->getDirector();?></td>
            <td><?=$pelicula->getSinopsis();?></td>
            <td><?=$pelicula->getGenero();?></td>
            <td><?=$pelicula->getPuntuacion();?></td>
            <td><img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($pelicula->getPortada());?>"/></td>
            <td>
                <form action="index.php?controller=peliculas&action=formularioVotar" method='post'>
                    <input hidden="" name='codigo'value=<?=$pelicula->getCodigo()?>>
                <select name="puntuacion">                    
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='6'>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option> 
                </select>

                <input type="submit" name="accion" value="Votar">
            </form>
             </td>
             <?php if(isset($_SESSION['usuarioLogueado'])): ?>
             <td><a href="index.php?controller=peliculas&action=fomularioEditar&codigo=<?=$pelicula->getCodigo();?>">Editar</a></td>
             <td><a href="index.php?controller=peliculas&action=eliminar&codigo=<?=$pelicula->getCodigo();?>">Eliminar</a></td>
             <?php endif;?>
          </tr>
            
          <?php 
                        endforeach;
                    
           ?>
       
        </tbody>
      </table>
</div>


