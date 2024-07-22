<!-- Navbar -->
<?php
        $session = session();
        $nombre = $session->get('nombre');
        $perfil = $session->get('perfil_id');
        ?>   


<nav class="navbar navbar-expand-lg navbar-light bg-success">
       <a class="navbar-brand" href="<?php echo base_url('inicio')?>">
         <img src="<?php echo base_url('assets/img/logo.png')?>" alt="Logotipo" height="30"></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
        <!-- MENU  ADMIN -->
        <?php if (session()->perfil_id == 1) : ?>
          <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav me-auto">
              <li class="nav-item active">
               <a class="nav-link" href=""> Admin: <?php echo session('nombre'); ?> </a>
               </li>
               <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url('inicio'); ?>">Principal</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">Acerca de</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="">Administrar</a>
               </li>
           </ul>
          <!-- MENU PARA CLIENTES -->
          <?php elseif (session()->perfil_id == 2) : ?>
            <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav me-auto">
              <li class="nav-item active">
               <a class="nav-link" href=""> cliente: <?php echo session('nombre'); ?> </a>
               </li>
               <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url('inicio'); ?>">Principal</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">Acerca de</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="">Catalogo</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('logout'); ?>">Cerrar Sesion</a>
               </li>       
           </ul> 
             <!-- MENU PARA NO LOGUEADOS -->
             <?php else : ?>
              <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav me-auto">
              
               <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url('inicio'); ?>">Principal</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">Acerca de</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
               </li>
              
           </ul>
           <form class="d-flex" role="search">
           <input class="form-control me-2" type="search" placeholder="Buscar.." aria-label="Search">
           <button class="btn btn-danger" type="submit">Buscar</button>
         </form>
         <?php endif;?>
       </div>
     </nav>
