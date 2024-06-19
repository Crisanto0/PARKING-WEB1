
<script lang="ts">
    import  goto from 'svelte-spa-router';
  
    export async function login(nombre_usuario: string, contrasena: string){
      try {
        const response = await fetch('/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ nombre_usuario, contrasena }),
        });
  
        const data = await response.json();
        if (response.ok) {
            // Si las credenciales son correctas, redirige al módulo 'inicio'
            window.location.href = '/inicio'; // Asegúrate de que '/inicio' sea la ruta correcta en tu router
        } else {
            // Manejar error
            throw new Error(data.message || 'Error al iniciar sesión');
        }
      } catch (error) {
        console.error('Error al iniciar sesión:', error);
        
      }
    }
  </script>
  
  
  
  
  <style>
      .fondo{
        display: flex;
      justify-content: center;
      align-items: center;
      background-image: url('/fondo.jpg');
      background-size: cover; 
      background-position: center; 
      height: 100vh; 
      position: relative; 
    }
    
      .tituloinicial{
        color: #2fd33d;
        text-align: center;
      }
    
      form {
        margin-top: 20px;
        text-align: center;
      }
      input {
        width:50%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
      }
      .login {
        background-color: #2fd33d;
        color: #fff;
        cursor: pointer;
      }
  
      .link-container {
       display: flex;
       justify-content: center;
      }
  
     .container {
       background-color: white;
       padding: 20px;
       border-radius: 10px;
       width: 300px; 
      }
  
    </style>
    
    <div class="fondo">
   
      <div class="container">
        <h1 class="tituloinicial">Login parking web</h1>
    
        <form action="/inicio" method="post">
          <input type="text" name="nombre_usuario" placeholder="Nombre usuario">
          <input type="password"  name="contrasena" placeholder="contraseña" required >
          <input type="submit" class="login" value="Login">
        </form>
        <div class="link-container">
          <a class="olvido" href="hh">olvide mi contraseña;</a>
      </div>
         
      </div>
    </div>