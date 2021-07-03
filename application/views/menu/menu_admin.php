<!-- INICIO DEL MENU -->
<ul class="sidebar-menu" data-widget="tree">
  <!-- <li class="header">HOME</li>
  <li class="">
    <a href="#">
      <i class="fa fa-home"></i> <span>Principal</span>
    </a>
  </li> -->
  <li class="header">MENU DE OPCIONES</li>
  <li class="<?php if(!empty($vcliente)){ echo $vcliente; } ?>">
    <a href="<?= base_url() ?>cliente">
      <i class="fa fa-users"></i> <span>Clientes</span>
    </a>
  </li>
  <li class="<?php if(!empty($vaceites)){ echo $vaceites; } ?>">
    <a href="<?= base_url() ?>inventario">
      <i class="fa fa-filter"></i> <span>Inventario</span>
    </a>
  </li>
  <li class="<?php if(!empty($vbombas)){ echo $vbombas; } ?>">
    <a href="<?= base_url() ?>bomba">
      <i class="fa fa-tint"></i> <span>Bombas</span>
    </a>
  </li>
  <li class="<?php if(!empty($vpersonal)){ echo $vpersonal; } ?>">
    <a href="<?= base_url() ?>personal">
      <i class="fa fa-street-view"></i> <span>Personal</span>
    </a>
  </li>
  <li class="header">OTROS</li>
  <li class="<?php if(!empty($vusuario)){ echo $vusuario; } ?>">
    <a href="<?= base_url() ?>usuario">
      <i class="fa fa-lock"></i> <span>Usuarios y Roles</span>
    </a>
  </li>
  <li class="<?php if(!empty($vreporte)){ echo $vreporte; } ?>">
    <a href="<?= base_url() ?>reporte">
      <i class="fa fa-pencil-square-o"></i> <span>Reportes</span>
    </a>
  </li>
</ul> 
</section>
    <!-- /.sidebar -->
</aside>
 <!-- ==================FIN DEL MENU============================= -->  