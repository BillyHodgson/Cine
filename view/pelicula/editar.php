<body id="top">
<div class="wrapper">
<div id="container">
<div id="respond">
    <form action="index.php?controller=peliculas&action=editar" method="post" enctype="multipart/form-data">
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="">Codigo:</label>
                <input readonly="" type="text" class="form-control" name="codigo" value='<?=$pelicula->getCodigo()?>'>
            </div>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_nombre">Nombre Pelicula:</label>
                <input type="text" class="form-control" name="nombre" value='<?=$pelicula->getNombre()?>'>
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_director">Director:</label>
                <input type="text" class="form-control" name="director"  value='<?=$pelicula->getDirector()?>'>
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_sinopsis">Sinopsis:</label>
                <input type="text" class="form-control" name="sinopsis"  value='<?=$pelicula->getSinopsis()?>'>
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Genero:</label>
                <select name="genero" value='<?=$pelicula->getGenero()?>'>                    
                        <?php foreach($listaGeneros as $row => $genero): ?>
                    <option><?=$genero->getNombre();?></option>
                    <?php endforeach; ?>
                </select>
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="">Puntuacion:</label>
                <input type="text" class="form-control" name="puntuacion"  value='<?=$pelicula->getPuntuacion()?>'>
            </div>
          </p> 
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="img_portada">Portada:</label>
                <input type="file" class="" name="portada" value=''>
                <td><img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($pelicula->getPortada());?>"/></td>
            </div>
          </p>
          <p>
          <div class="">
               <input type="submit" name="accion" value="Guardar">
               <input type="submit" name="accion" value="Cancelar">   
          </div>    
          </p>
        </form>
</div>
</div>
</div>
</body