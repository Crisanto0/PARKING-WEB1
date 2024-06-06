<style> 
    

    .titulo{
        text-align: center;
        color: rgb(43, 214, 43);
        font-family:Arial, Helvetica, sans-serif;
        font-size: 40 px;
    
        
    }
    label {
                display: inline-block;
                width: 100px;
                text-align: left; 
                margin-right: 10px;
                
              
                }      
    
    
    .guardar{
        background-color: green;
        text-align: center;
        
       
    }
    
    .cancelar{
        background-color: red;
        text-align: center;
       
        
    }
    .tipo_identificación {
                display: inline-block;
                width: 100px;
                text-align: left; 
                margin-right: 10px;
               
                }
    .horario{ display: inline-block;
                width: 100px;
                text-align: left; 
                margin-right: 10px;
                
            }
    
    
    
    .centrar-botones {
                text-align: center;
                margin-top: 20px;
                margin-right: 150px;
            }
    
            .centrar-botones input[type="submit"] {
                margin: 0 10px;
                padding-right: 10px;
                
            }
            
            .centrar-información {
                display: flex;
                flex-direction:column;
                justify-content: center;
                align-items: center;
                background-color: white;
                padding: 30px;
                border-radius: 10px; /* Bordes redondeados */
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Sombra */
                width: 1000px;
                margin: 0 auto; /* Centrado horizontal */
            }

            input{
                margin-right: 50px;
                padding-right: 100px;
            }
            select{
                margin-right: 120px;
                padding-right: 100px;
            }
            input[type="date"]{
               margin-right: 110px ;
               padding-right: 100px;
            }

           form{
            margin-left: 50px;
           }
            
    </style>
    <div class="centrar-información">
    <h1 class="titulo"> Formato registro empleados  </h1><br><br>
    <form>
        
            <h4>INFORMACIÓN PERSONAL</h4><br>
            <div >
            <label for="Nombre">Nombre:</label>
            <input type="text" id="Nombre" name="Nombre" required>
            <label for="Apellido" class="margen2">Apellidos:</label>
            <input type="text" id="Apellido" name="Apellido" required ><br>
            
            <label for="nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="nacimiento" name="nacimiento" required >
            <label for="tipo_identificación" class="tipo_identificación">Tipo de identificación:</label>
            <select id="tipo_identificación"name="tipo_identificación">
                <option value="cedula ">Cedula</option>
                <option value="cedula de extrangeria">Cedula de extrangeria</option>
                </select> <br>
            
            <label for="identificación">Número de identificación:</label>
            <input type="text" id="identificación" name="identificación" required >
            <label for="email" class="margen2">Correo electrónico:</label>
            <input type="email" id="email" name="email"><br>
            
            <label for="phone">Teléfono:</label>
            <input type="number" id="phone" name="phone" required>
            <label for="address" class="margen2">Dirección:</label>
            <input  type="text" id="address" name="address" > <br>
          <br> 
          <label for="username">Nombre de usuario</label>
          <input type="text" id="username" name="username" required>
          <label for="password">Contraseña</label>
          <input type="text" id="password" name="password" required>
        </div>
            <h4>INFORMACIÓN LABORAL</h4>
            <div>
            <label for="salario">Salario</label>
            <input type="number" id="Salario" name="Salario">
    
            <label for="tipo_de_contrato" class="margen2">Tipo de contrato</label>
            <select name="tipo_de_contrato" id="tipo_de_contrato">
                <option>Contrato indefinido</option>
                <option>Contrato temporal</option>
                <option>Contrato de aprendizaje </option>
            </select>
           <br> 
           <label for="rol">Rol</label>
           <select name="rol" id="rol">
            <option>Empleado </option>
            <option>Administrador</option>
            
    
        </select>
        <label for="horario" class="horario">Horaio</label>
        <select name="horario" id="horario">
         <option>Diurno</option>
         <option>Nocturno</option>
        
     </select>
     <br><br>
    </div>
     <div class="centrar-botones">
        <input type="submit" value="Guardar" class="guardar">
        <input type="submit" value="Cancelar" class="cancelar">
    </div>
          </form>
    </div>