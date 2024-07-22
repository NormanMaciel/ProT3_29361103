 <!-- Formulario de Login Back-->
 <div class="container my-5">
        <h1>Login</h1>
            <!--Mensaje de Error-->
            <?php if(session()->getFlashdata('msg')) :?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
            <?php endif;?>

        <form method="post" action="<?php echo base_url('/enviarLogin')?>">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input name="pass" type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-danger">Login</button>
                </div>
                <div class="text-center">
                        <small>No tienes una cuenta?<a class="fw-bold" href="<?php echo base_url('/registro'); ?>"> Registrarse</a></small>
                </div>
            </div>
        </form>
    </div>