<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">inhabilitado</a>
          </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>    
      </nav>
    <div class="container" style="margin-top:70px" >
            <div class="row justify-content-around" >                 
                  
    <!-- <form autocomplete="off" method="POST" action="registrar" name="form" id="form" >     -->
    <form autocomplete="off" name="form" id="form" >           
        <div class="form-row">
            <h3>Formulario de Registro de practicantes</h3>
            <div class="form-group col-md-6">
                <label>Dni:</label>
                <input type="text" class="form-control" name="dni" id="dni"  placeholder="Escriba dni...">
            </div>
            <div class="form-group col-md-6">
                <label>A. Paterno:</label>
                <input type="text" class="form-control" name="apePa" id="apePa" placeholder="Escriba su apellido Paterno...">
            </div>            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>A. Materno:</label>
                <input type="text" class="form-control" name="apeMa" id="apeMa" placeholder="Escriba su apellido Materno...">
            </div>
            <div class="form-group col-md-6">
                <label>Nombres:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba su Nombres...">
            </div>        
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6"> 
                <label>Fecha de Nacimiento:</label>              
               <input type="date" class="form-control"  name="fech" id="fech" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Género:</label>
                <select type="text" class="form-control" name="s" placeholder="Seleccione género...">
                    <option>Seleccione su género</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>            
        </div>
        <div class="form-row">            
            <div class="form-group col-md-6">
                <label>CodTurno:</label>
                <select type="text" class="form-control" name="ct" placeholder="Seleccione género...">
                    <option>Seleccione su código</option>
                    <option value="T1">T1</option>
                    <option value="T2">T2</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Descripción:</label>
                <textarea type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Escriba una descripción suya..."></textarea>
            </div>
        </div>        
            <button class="btn btn-primary" type="submit" id="btn-yola" >Enviar</button>
    </form>
                    
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    <script src="public/assets/js/agregar.js"></script>   
</body>
</html>