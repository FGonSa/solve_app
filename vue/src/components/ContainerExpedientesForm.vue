<template>
    <div class="carta-expediente-main container-fluid">
            <div class="carta-expediente-header p-5">
                <h5><b>Expedientes</b></h5>
            </div>
            <div class="carta-expediente-body">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID Expediente</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col">Estado</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    <!-- v-for="(idExp, imagenPath, nombre, email, fecha, actualizacion, estado) in myObject -->
                    <tr>
                        <th scope="row ">123456789</th>
                        <td class="autor-main ">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                        </td>
                        <td>16/10/2022 - 08:15h</td>
                        <td>17/10/2022 - 12:33h</td>
                        <td><button class="btn-estado btn btn-success btn-sm">En Proceso</button></td>
                        <td><button class="btn-mostrar btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button></td>
                    </tr>
                    <tr>
                        <th scope="row ">123456789</th>
                        <td class="autor-main ">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                        </td>
                        <td>16/10/2022 - 08:15h</td>
                        <td>17/10/2022 - 12:33h</td>
                        <td><button class="btn-estado btn btn-success btn-sm">En Proceso</button></td>
                        <td><button class="btn-mostrar btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button></td>
                    </tr>
                    <tr>
                        <th scope="row ">123456789</th>
                        <td class="autor-main ">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                        </td>
                        <td>16/10/2022 - 08:15h</td>
                        <td>17/10/2022 - 12:33h</td>
                        <td><button class="btn-estado btn btn-success btn-sm">En Proceso</button></td>
                        <td><button class="btn-mostrar btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button></td>
                    </tr>
                    <tr>
                        <th scope="row ">123456789</th>
                        <td class="autor-main ">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                        </td>
                        <td>16/10/2022 - 08:15h</td>
                        <td>17/10/2022 - 12:33h</td>
                        <td><button class="btn-estado btn btn-success btn-sm">En Proceso</button></td>
                        <td><button class="btn-mostrar btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button></td>
                    </tr>
                    <tr>
                        <th scope="row ">123456789</th>
                        <td class="autor-main ">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                        </td>
                        <td>16/10/2022 - 08:15h</td>
                        <td>17/10/2022 - 12:33h</td>
                        <td><button class="btn-estado btn btn-success btn-sm">En Proceso</button></td>
                        <td><button class="btn-mostrar btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button></td>
                    </tr>
                    <tr>
                        <th scope="row ">123456789</th>
                        <td class="autor-main ">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                        </td>
                        <td>16/10/2022 - 08:15h</td>
                        <td>17/10/2022 - 12:33h</td>
                        <td><button class="btn-estado btn btn-success btn-sm">En Proceso</button></td>
                        <td><button class="btn-mostrar btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button></td>
                    </tr>
                    <tr>
                        <th scope="row ">123456789</th>
                        <td class="autor-main ">
                                <div class="autor-img">
                                    <img src="/public/assets/foto-perfil.png">
                                </div>
                                <div class="autor-nombre">
                                    <div>NombreUser</div>
                                    <div class="email-font">nombreuser@gmail.com</div>
                                </div>
                        </td>
                        <td>16/10/2022 - 08:15h</td>
                        <td>17/10/2022 - 12:33h</td>
                        <td><button class="btn-estado btn btn-success btn-sm">En Proceso</button></td>
                        <td><button class="btn-mostrar btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="material-icons">visibility</span>Mostrar</button></td>
                    </tr>
                    
                </tbody>
                </table>
            </div>

            <div class="p-5 d-flex justify-content-center">
                <small>&copy; Copyright 2022, Solve Solutions</small>
            </div>

            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Expediente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <h6 class="texto-modal pt-1 pb-3">Aspectos Generales</h6>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">ID Expediente</label>
                                    <input type="password" class="form-control" placeholder="123456789" id="exampleInputPassword1" disabled>
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                                    <input type="password" class="form-control" placeholder="16/10/2022 - 08:15h" id="exampleInputPassword1" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Autor</label>
                                    <input type="password" class="form-control" placeholder="NombreUsuario" id="exampleInputPassword1" disabled>
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                                    <input type="password" class="form-control" placeholder="17/10/2022 - 12:33h" id="exampleInputPassword1" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Estado</label>
                                    <select class="form-select" aria-label="Disabled select example">
                                        <option selected id="en_proceso" value="en_proceso">En Proceso</option>
                                        <option id="solicitado" value="solicitado">Solicitado</option>
                                        <option id="aceptado" value="aceptado">Aceptado</option>
                                        <option id="cerrado" value="cerrado">Cerrado</option>
                                        <option id="inamovible" value="inamovible">Inamovible</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-5 mb-3">
                                <hr>
                            </div>
                            <h6 class="texto-modal pb-3">Localidad</h6>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Fuera de Cataluña?</label>
                                    <div class="container-catalunya">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1"><p class="catalunya-texto">SI</p></label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadioInline2"><p class="catalunya-texto">NO</p></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Provincia</label>
                                    <input type="text" placeholder="Barcelona" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Municipio</label>
                                    <input type="text" placeholder="Barcelona" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Direccion</label>
                                    <input type="text" placeholder="Via Laietana" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="row mt-5 mb-3">
                                <hr>
                            </div>
                            <h6 class="texto-modal pb-3">Otros Datos</h6>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Incidente</label>
                                    <input type="text" placeholder="Accidente moto" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Tiempo Llamada</label>
                                    <input type="text" placeholder="1:24min" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nota Común</label>
                                    <textarea class="form-control nota-comun-modal" id="validationTextarea" placeholder="El incidente ocurrio hace 5 min, al lado de la via..."></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-guardar-modal">Guardar</button>
                                <button type="button" class="btn btn-dark btn-cerrar-modal" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                            
                        </form>

                    </div>
                    </div>
                </div>
            </div>
    </div>
</template>


<script setup>
import 'bootstrap/dist/js/bootstrap.bundle';

</script>



<style scoped>

</style>
<style lang="scss" scoped>
.btn-guardar-modal{
    background-color: var(--color-rosa);
    color: white;
    border: 1px solid var(--color-rosa);
}
.btn-guardar-modal:hover{
    opacity: 60%;
}
.btn-cerrar-modal:hover{
    opacity: 60%;
}
.nota-comun-modal{
    background-color: var(--color-amarillo-fuerte);
}
.catalunya-texto{
    margin-left: 5px;
}
.container-catalunya{
    display: flex;
    justify-content: left;
    gap: 1rem;
}
#en_proceso{
    color: rgb(86, 195, 95);
}
#solicitado{
    color: var(--color-amarillo-visible);
}
#aceptado{
    color: rgb(88, 129, 23);
}
#cerrado{
    color: var(--color-azul-fuerte);
}
#inamovible{
    color: rgb(85, 35, 109);
}
    .carta-expediente-main{
        font-family: 'Poppins', sans-serif;
        border-radius: 25px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background-color: white;
        .carta-expediente-header{
            color: var(--color-amarillo-visible);
        }
        .card-header{
        border-radius: 25px 25px 0px 0px;
        /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
    }

    
    .autor-main{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        img{
            height: 45px;
            width: 45px;
            border-radius: 45px;
        }
        .email-font{
            font-size: 10pt;
            color: grey;
        }
    }

    .modal-title{
        color: var(--color-amarillo-visible);
    }

    .texto-modal{
        color: grey;
    }

    }
    .btn-estado{
        border-radius: 25px;
    }
    .btn-mostrar{
        border-radius: 25px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    tr{
        text-align: center;
        vertical-align: middle;
    }
    

</style>