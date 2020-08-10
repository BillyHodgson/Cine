<body id="top">
<div class="wrapper">
<div id="container">
<div id="respond">
    <form action="index.php?controller=peliculas&action=votar" method="post">
          <p>
            <div class="col-sm-10">
                <label class=" col-sm-2 control-label" for="txt_genero">Puntuacion:</label>
                <select name="puntuacion">                    
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option> 
                </select>
            </div>
          </p>         
          <p>
          <div class="">
               <input type="submit" name="accion" value="Votar">
               <input type="submit" name="accion" value="cancelar">   
          </div>    
          </p>
        </form>
</div>
</div>
</div>
</body>