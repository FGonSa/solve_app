<template>
    <div class="container-fluid header-form mt-3">

    </div>
    <div class="container-fluid caja-form-perfil mt-3">
        <div class="contenedor-formulario">
            <form class="row g-3 needs-validation" novalidate>
                <div class="row-para-form row">
                    <h6 class="info-user mt-1 mb-4">INFORMACIÓN DE USUARIO</h6>
                        <div class="col-4 mb-4">
                            <label for="validationTooltip01" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="validationTooltip01" value="" required>
                            <div class="invalid-tooltip">
                            Por favor, escribe un Nombre válido.
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <label for="validationTooltip01" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="validationTooltip01" value="" required>
                            <div class="invalid-tooltip">
                              Por favor, escribe un Apellido válido.
                            </div>
                        </div>
                        <div class="col-1 mb-4"></div>
                        <div class="col-4 mb-4">
                            <label for="validationTooltip01" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="validationTooltip01" value="" required>
                            <div class="invalid-tooltip">
                              Por favor, escribe un Nombre de Usuario válido.
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <label for="validationTooltip01" class="form-label">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" id="validationTooltip01" value="" required>
                                <div class="invalid-tooltip">
                                  Por favor, escribe un Email válido.
                                </div>
                            </div>
                        </div>
                        <div class="col-1 mb-4"></div>
                        <div class="col-8 mb-4">
                            <label for="validationTooltip01" class="form-label">Imagen Perfil</label>
                            <input type="file" class="form-control" id="validationTooltip01" value="" required>
                            <div class="invalid-tooltip">
                              Por favor, seleccione una Imagen válido.
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <button type="submit" class="btn-guardar-nombre btn">Guardar</button>
                        </div>
                </div>
            </form>
            <div class="div-hr row"><hr/></div>
            <form class="row g-3 needs-validation" novalidate>
                <div class="row-para-form row">
                    <h6 class="info-user mt-1 mb-4">AJUSTES DE PRIVACIDAD</h6>
                        <div class="col-4 mb-4">
                            <label for="exampleInputPassword1">Contraseña Actual</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                            <div class="invalid-tooltip">
                            Lo sentimos, la contraseña introducida no es válida.
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            
                        </div>
                        <div class="col-1 mb-4"></div>
                        <div class="col-4 mb-4">
                            <label for="exampleInputPassword1">Nueva Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                            <div class="invalid-tooltip">
                            Lo sentimos, la contraseña introducida no es válida.
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <label for="exampleInputPassword1">Repetir Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                            <div class="invalid-tooltip">
                            Lo sentimos, la contraseña introducida no es válida.
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <button type="submit" class="btn-guardar-password btn">Confirmar</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.header-form{
    height: 50px;
    width: 100%;
    background: white;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 25px 25px 0px 0px ;
    border: 0.25px solid rgb(224, 224, 224);
}
.caja-form-perfil{
    background: rgb(252,248,255);
    background: linear-gradient(0deg, rgba(252,248,255,1) 0%, rgba(252,248,255,1) 49%, rgba(255,248,255,1) 100%);
    box-shadow:  0px 15px 14px 4px rgba(0,0,0,0.12);
    border-radius: 0px 0px 25px 25px;
    .row-para-form{
        // display: flex;
        // align-content: center;
        padding-left: 10rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
        .info-user{
            color: rgb(175, 141, 161);
        }
        .btn-guardar-nombre{
            background-color: var(--color-rosa-fuerte);
            color: white;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-top: 32px;

        }
        .btn-guardar-nombre:hover{
            background-color: var(--dark);
            color: white;
        }
        .btn-guardar-password{
            background-color: var(--color-rosa-fuerte);
            color: white;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-top: 24px;
        }
        .btn-guardar-password:hover{
            background-color: var(--dark);
            color: white;
        }
    }
}
.div-hr{
    margin-left: 4rem;
    margin-right: 4rem;
}
</style>