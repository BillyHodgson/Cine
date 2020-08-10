<body id="top">
<div class="wrapper">
<div id="container">
<div id="respond">
    <form action="index.php?controller=peliculas&action=registrar" method="post" enctype="multipart/form-data">
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_nombre">Nombre Pelicula:</label>
                <input type="text" class="form-control" name="nombre" placeholder="nombre" size="22">
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_director">Director:</label>
                <input type="text" class="form-control" name="director" placeholder="nombre">
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_sinopsis">Sinopsis:</label>
                <textarea class="form-control" name="sinopsis"></textarea>
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Genero:</label>
                <select name="genero">                    
                        <?php foreach($listaGeneros as $row => $genero): ?>
                    <option><?=$genero->getNombre();?></option>
                    <?php endforeach; ?>
                </select>
            </div>
          </p>         
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="img_portada">Portada:</label>
                <input type="file" class="" name="portada">
            </div>
          </p>
          <p>
          <div class="">
               <input type="submit" name="accion" value="registrar">
               <input type="submit" name="accion" value="cancelar">   
          </div>    
          </p>
        </form>
</div>
</div>
</div>
</body>