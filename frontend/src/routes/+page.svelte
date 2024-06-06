<script>
    // Tu código JavaScript aquí
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
  
      <form action="index2.html" method="post">
        <input type="text" name="username" placeholder="Correo">
        <input type="password" pattern=".{300}" name="password" placeholder="contraseña" >
        <input type="submit" class="login" value="Login">
      </form>
      <div class="link-container">
        <a class="olvido" href="hh">olvide mi contraseña;</a>
    </div>
       
    </div>
  </div>
  