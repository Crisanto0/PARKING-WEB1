<style>
    
    
        .titulo{
          color: #2fd33d;
          text-align: center;
        }
      h2{
        color: #217a28;
        font-family: sans-serif;
      }
    
    p{
        font-family: sans-serif;
        font-size: 20px;
    }
    
    
    </style>
    
    
    
    
    <h1 class="titulo">
        Bienvenido al portal parking web
    </h1>
    <div class="container">
    <h2>
        Anuncios 
    </h2>
    <p>
        A continuación se comparte la creación de anuncios
    </p> </div>
    
    
    <script lang="ts">
        let file: File;
        let text = '';
        let imageSrc = '';
        let showForm = false; 
    
    
        function handleFileChange(event: Event) {
            let inputElement = event.target as HTMLInputElement;
            if (inputElement.files != null) {
                file = inputElement.files[0];
                imageSrc = URL.createObjectURL(file);
            }
        }
    
        function handleTextChange(event: Event) {
            let inputElement = event.target as HTMLInputElement;
            text = inputElement.value;
        }
    
        function handleSubmit() {
            // Aquí puedes manejar la subida de la imagen y el texto
            console.log(file, text);
            // Luego de subir el archivo, puedes resetear los valores
            file = file;
            text = '';
        }
    </script>
    
    <button on:click={() => showForm = !showForm}>
        {showForm ? 'Cancelar' : 'Crear anuncio'}
    </button>
    
    {#if showForm}
        <div>
            <textarea id="textoAnuncio" bind:value={text} placeholder="Escribe tu anuncio aquí"></textarea>
            <input type="file" id="imagen" accept="image/png, image/jpeg" on:change={handleFileChange}>
            <button on:click={handleSubmit}>Subir anuncio</button>
        </div>
    {/if}
    
    <!-- Aquí puedes mostrar la imagen subida -->
    {#if imageSrc}
        <img src={imageSrc} alt="Imagen del anuncio">
    {/if}