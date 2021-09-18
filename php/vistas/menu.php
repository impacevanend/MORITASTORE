<nav class="sidebar col-12 h-75">
   <div class="text">
      Menu
   </div>
   <ul>
      <li class=""><a href="#">Contenido: <?php echo $_SESSION['usuario'];?></a></li>
      <li>
         <a href="#" class="feat-btn"><i class="fas fa-tags me-2"></i>Catalogo
            <span class="fas fa-caret-down first"></span>
         </a>
         <ul class="feat-show">
            <li><a href="categorias.php">Categorias</a></li>
            <li><a href="articulos.php">Aritculos</a></li>
         </ul>
      </li>
      <li>
         <a href="#" class="serv-btn"><i class="fab fa-cc-visa me-2"></i>Ventas
            <span class="fas fa-caret-down second"></span>
         </a>
         <ul class="serv-show">
            <li><a href="ventas.php">Venta de Productos</a></li>
            <li><a href="ventas/perfilRecurrente.html">Perfil recurrente</a></li>
            <li><a href="ventas/devoluciones.htm">Devoluciones</a></li>
         </ul>
      </li>
      <li class="mb-2">
         <a href="#" class="serv-cam"><i class="far fa-user me-2"></i>Usuarios
            <span class="fas fa-caret-down second"></span>
         </a>
         <ul class="serv-cam">
            <li><a href="clientes.php">Clientes</a></li>
            

           <?php if($_SESSION['usuario']== "admin"): ?>
           <li><a href="usuarios.php">Administrar Usuarios</a></li>
           <?php endif; ?>


         
         </ul>
      </li>
      <li> 
         <a href="#" class="serv-cam2"><i class="far fa-chart-bar me-2"></i>Informes
            <span class="fas fa-caret-down second"></span>
         </a>
         <ul class="serv-cam2">
            <li><a href="reports/reportes.html">Informes</a></li>
            <li><a href="#">Reportes</a></li>
         </ul>
      </li>


   </ul>
</nav>