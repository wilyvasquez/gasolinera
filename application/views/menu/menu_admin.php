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
  <li class="<?php if(!empty($vlbombas)){ echo $vlbombas; } ?>">
    <a href="<?= base_url() ?>bomba/lectura">
      <i class="fa fa-tint"></i> <span>Lectura Bombas</span>
    </a>
  </li>
  <!-- <li class="<?php if(!empty($vpersonal)){ echo $vpersonal; } ?>">
    <a href="<?= base_url() ?>personal">
      <i class="fa fa-street-view"></i> <span>Personal</span>
    </a>
  </li> -->
  <li class="header">OTROS</li>
  <li class="treeview <?php if(!empty($vadmin)){ echo $vadmin; } ?>">
    <a href="#">
      <i class="fa fa-lock"></i> <span>Administrador</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="<?php if(!empty($vusuario)){ echo $vusuario; } ?>"><a href="<?= base_url() ?>usuario"><i class="fa fa-circle-o"></i> Usuarios y Roles</a></li>
      <li class="<?php if(!empty($vproveedor)){ echo $vproveedor; } ?>"><a href="<?= base_url() ?>proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
      <li class="<?php if(!empty($historial)){ echo $historial; } ?>"><a href="<?= base_url() ?>chistorial"><i class="fa fa-circle-o"></i> Personal</a></li>
      <li class="<?php if(!empty($vgasolina)){ echo $vgasolina; } ?>"><a href="<?= base_url() ?>gasolina"><i class="fa fa-circle-o"></i> Gasolina</a></li>
      <li class="<?php if(!empty($vbombas)){ echo $vbombas; } ?>"><a href="<?= base_url() ?>bomba"><i class="fa fa-circle-o"></i> Bombas</a></li>
      <li class="<?php if(!empty($vturnos)){ echo $vturnos; } ?>"><a href="<?= base_url() ?>turno"><i class="fa fa-circle-o"></i> Turnos</a></li>
    </ul>
  </li>
  <!-- <li class="<?php if(!empty($vproveedor)){ echo $vproveedor; } ?>">
    <a href="<?= base_url() ?>proveedor">
      <i class="fa fa-truck"></i> <span>Proveedores</span>
    </a>
  </li> -->  
  <!-- <li class="<?php if(!empty($vusuario)){ echo $vusuario; } ?>">
    <a href="<?= base_url() ?>usuario">
      <i class="fa fa-lock"></i> <span>Usuarios y Roles</span>
    </a>
  </li> -->
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