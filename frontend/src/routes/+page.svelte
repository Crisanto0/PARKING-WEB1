<script lang="ts">
  
    import { goto } from '$app/navigation';
    let nombre_usuario = '';
    let contrasena = '';
    let error = '';

    async function login() {
        const response = await fetch('http://127.0.0.1:8000/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ nombre_usuario, contrasena }),
        });

        const data = await response.json();

        if (response.ok) {
            localStorage.setItem('token', data.token);
            goto('/inicio');
        } else {
            error = data.message;
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
    
        <form method="post" on:submit|preventDefault={login}>
          <input type="text" name="nombre_usuario" placeholder="Nombre usuario" bind:value={nombre_usuario}>
          <input type="password"  name="contrasena" placeholder="contraseña" required bind:value={contrasena}>
          {#if error}
        <p>{error}</p>
    {/if}
          <input type="submit" class="login" value="Login">
        </form>
        <div class="link-container">
          <a class="olvido" href="hh">olvide mi contraseña;</a>
      </div>
         
      </div>
    </div>
