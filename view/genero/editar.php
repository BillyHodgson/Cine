-<body id="top">
<div class="wrapper">
<div id="container">
<div id="respond">
    <form action="index.php?controller=generos&action=editar" method="post">
        <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_nombre">Codigo:</label>
                <input readonly="" type="text" class="form-control" name="codigo"  size="22" value='<?=$genero->getCodigo();?>'>
            </div>
          </p>
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_nombre">Genero:</label>
                <input type="text" class="form-control" name="nombre" placeholder="nombre" size="22" value='<?=$genero->getNombre();?>'>
            </div>
          </p>
          <div class="">
               <input type="submit" name="accion" value="Guardar">
               <input type="submit" name="accion" value="cancelar">   
          </div>    
          </p>
        </form>
</div>
</div>
</div>
</body>
