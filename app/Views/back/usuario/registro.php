
    <!-- Formulario de Registro Back-->
    <div class="container my-5">
        <h1>Registrarse</h1>
        <?php $validation = \Config\Services::validation(); ?>
        <form  method="post" action="<?php echo base_url('/enviar-form') ?>">
            <?=csrf_field();?>
            <?=csrf_field();?>
            <?php if(!empty (session()->getFlashdata('fail'))):?>
                <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
            <?php endif?>     
            <?php if(!empty (session()->getFlashdata('sucess'))):?>
                <div class="alert alert-danger"><?=session()->getFlashdata('sucess');?></div>
            <?php endif?>     
            <div class="form-group row">
                <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input name="nombre" type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                    <!-- Error -->
                     <?php if($validation->getError('nombre')) {?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('nombre'); ?>
                        </div> 

                     <?php }?>
                                           
                </div>
            </div>
            <div class="form-group row">
                <label for="inputApellido" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                    <input name="apellido" type="text" class="form-control" id="inputApellido" placeholder="Apellido">
                    <!-- Error -->
                    <?php if($validation->getError('apellido')) {?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('apellido'); ?>
                        </div> 

                    <?php }?>                               
                
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                      <!-- Error -->
                    <?php if($validation->getError('email')) {?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('email'); ?>
                        </div> 

                    <?php }?>    
                                
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUsuario" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                    <input name="usuario" type="text" class="form-control" id="inputUsuario" placeholder="Usuario">
                         <!-- Error -->
                    <?php if($validation->getError('usuario')) {?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('usuario'); ?>
                        </div> 

                    <?php }?> 
                
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input name="pass" type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                         <!-- Error -->
                    <?php if($validation->getError('pass')) {?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('pass'); ?>
                        </div> 

                    <?php }?> 
                
                
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-danger">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
