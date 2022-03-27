<template>
  <div class="container-fluid caja-main-perfil">
        <div class="container-medio">
            <div class="foto-perfil">
                <img src="/public/assets/foto-perfil.png">
            </div>
            <div class="nombre-user">
                <h1>Nombre</h1>
                <h4>Apellido</h4>
            </div>
        </div>
        <div class="rol-usuario d-flex justify-content-end">
            <div class="row contenedor-role-1">
                <h3><b>OPERADOR</b></h3>
                <!-- <h3><b>SUPERVISOR</b></h3>
                <h3><b>ADMINISTRADOR</b></h3> -->
            </div>
            <div class="row contenedor-role-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 320 512" s>
                    <path fill="#FFE64E" d="M105.1 224H80C71.12 224 64 231.1 64 240v32c0 8.875 7.125 15.1 16 15.1L96 288v5.5C96 337.5 91.88 380.1 72 416h176C228.1 380.1 224 337.5 224 293.5V288l16-.0001c8.875 0 16-7.125 16-15.1v-32C256 231.1 248.9 224 240 224h-25.12C244.3 205.6 264 173.2 264 136C264 78.5 217.5 32 159.1 32S56 78.5 56 136C56 173.2 75.74 205.6 105.1 224zM272 448H47.1C21.49 448 0 469.5 0 495.1C0 504.8 7.163 512 16 512h288c8.837 0 16-7.163 16-16C320 469.5 298.5 448 272 448z"/>
                </svg>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 384 512">
                    <path fill="#FFE64E" d="M19 272.5l40.62 18C63.78 292.3 68.25 293.3 72.72 293.3c4 0 8.001-.7543 11.78-2.289l12.75-5.125c9.125-3.625 16-11.12 18.75-20.5L125.2 234.8C127 227.9 131.5 222.2 137.9 219.1L160 208v50.38C160 276.5 149.6 293.1 133.4 301.2L76.25 329.9C49.12 343.5 32 371.1 32 401.5V416h319.9l-.0417-192c0-105.1-85.83-192-191.8-192H12C5.375 32 0 37.38 0 44c0 2.625 .625 5.25 1.75 7.625L16 80L7 89C2.5 93.5 0 99.62 0 106V243.2C0 255.9 7.5 267.4 19 272.5zM52 128C63 128 72 137 72 148S63 168 52 168S32 159 32 148S41 128 52 128zM336 448H47.1C21.49 448 0 469.5 0 495.1C0 504.8 7.163 512 16 512h352c8.837 0 16-7.163 16-16C384 469.5 362.5 448 336 448z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 448 512">
                    <path fill="#FFE64E" d="M367.1 448H79.97c-26.51 0-48.01 21.49-48.01 47.1C31.96 504.8 39.13 512 47.96 512h352c8.838 0 16-7.163 16-16C416 469.5 394.5 448 367.1 448zM416.1 160h-160V112h16.01c17.6 0 31.98-14.4 31.98-32C303.1 62.4 289.6 48 272 48h-16.01V32C256 14.4 241.6 0 223.1 0C206.4 0 191.1 14.4 191.1 32.01V48H175.1c-17.6 0-32.01 14.4-32.01 32C143.1 97.6 158.4 112 175.1 112h16.01V160h-160C17.34 160 0 171.5 0 192C0 195.2 .4735 198.4 1.437 201.5L74.46 416h299.1l73.02-214.5C447.5 198.4 448 195.2 448 192C448 171.6 430.1 160 416.1 160z"/>
                </svg> -->
            </div>
        </div>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.caja-main-perfil{
    background: rgb(185,47,115);
    background: linear-gradient(0deg, rgba(185,47,115,1) 0%, var(--color-rosa) 45%, rgba(247,111,178,1) 100%); 
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 25px;
    .container-medio{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 3rem;
        gap: 5rem;
        img{
            width: 250px;
            height: 250px;
            border-radius: 250px;
            border: 5px solid var(--color-amarillo-fuerte);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        .nombre-user{
            display: flex;
            gap: 0.5rem;
            h4{
                color: var(--color-amarillo-fuerte);
            }
        }
    }
    .rol-usuario{
        margin-right: 1rem;
        display: flex;

    }
    .contenedor-role-2{
        margin-left: 1px;
    }
}
</style>