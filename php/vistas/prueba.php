<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/icon.png" class="favicon">
    <!--* fuentes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;300;600;700;900&display=swap" rel="stylesheet">
    <title>M.Store</title>
    <script src = "https://code.jquery.com/jquery-3.4.1.js" > </script> 
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    <!--* Sass-Css -->
    <link rel="stylesheet" href="../../sass/custom.css">
    <link rel="stylesheet" href="../../dashboard.css"> 



</main>


</head>
<body>

<main class="container-fluid alto-100 w-100 ">

    <div class="row">
      <div class="col-12 bg-primary">
        <img src="../../images/android-icon-72x72.png" class="rounded float-start img-fluid m-1" alt="logo">
      </div>
            
            <div class="col-12 col-lg-3 border bg-success text-white ">
                <!--*menu  Columna izquierda-->
                 <nav class="sidebar col-12 h-75">
                    <div class="text">
                       Menu
                    </div>
                    <ul>
                       <li class=""><a href="#">Contenido:</a></li>
                       <li>
                          <a href="#" class="feat-btn"><i class="fas fa-tags me-2"></i>Catalogo
                          <span class="fas fa-caret-down first"></span>
                          </a>
                          <ul class="feat-show">
                             <li><a href="catalogo/catalogo.html">Catalogo</a></li>
                             <li><a href="catalogo/productos.html">Productos</a></li>
                          </ul>
                       </li>
                       <li>
                          <a href="#" class="serv-btn"><i class="fab fa-cc-visa me-2"></i>Ventas
                          <span class="fas fa-caret-down second"></span>
                          </a>
                          <ul class="serv-show">
                             <li><a href="ventas/ordenes.html">Ordenes</a></li>
                             <li><a href="ventas/perfilRecurrente.html">Perfil recurrente</a></li>
                             <li><a href="ventas/devoluciones.htm">Devoluciones</a></li>
                          </ul>
                       </li>
                       <li class="mb-2">
                          <a href="#" class="serv-cam"><i class="far fa-user me-2"></i>Clientes
                          <span class="fas fa-caret-down second"></span>
                          </a>
                          <ul class="serv-cam">
                             <li><a href="clients/clientes.html">Clientes</a></li>
                             <li><a href="clients/clientes.html">Grupo de clientes</a></li>
                             <li><a href="clients/aprobacionesClientes.html">Clientes aprobados</a></li>
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
            </div>


            <div class="col-12 col-lg-9 border bg-secondary ">
                <!--*menu  Columna derecha-->
                <div class="row">
                    <!--* miga de pan header dasboard -->
                    <div class="col-12 p-2 border">
                        <ol class="breadcrumb alert alert-dark">
                            <li class="breadcrumb-item h5">Tablero</li>
                            <li class="breadcrumb-item">Home</li>
                            <a class="breadcrumb-item active alert-link" href="dashboard.html"> Tablero</a>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <!-- *Cajas de totales -->
                    <div class="col-12 col-lg-3 p-2 ">
                        <div class="card mb-3">
                            <div class="card-header bg-transparent border-success">Ordenes Totaltes</div>
                            <div class="card-body text-success">
                              <h5 class="card-title"><i class="fas fa-shopping-basket me-5"></i>2 millones</h5>
                              
                            </div>
                            <div class="card-footer bg-transparent border-success">Ver más...</div>
                          </div>
                    </div>
                    <div class="col-12 col-lg-3 p-2 ">
                        <div class="card mb-3">
                            <div class="card-header bg-transparent border-success">Ventas Totales</div>
                            <div class="card-body text-success">
                              <h5 class="card-title"><i class="fab fa-cc-visa me-5"></i>10 millones</h5>
                              
                            </div>
                            <div class="card-footer bg-transparent border-success">Ver más...</div>
                          </div>
                    </div>
                    <div class="col-12 col-lg-3 p-2">
                        <div class="card  mb-3">
                            <div class="card-header bg-transparent border-success">Clientes Totales</div>
                            <div class="card-body text-success">
                              <h5 class="card-title"><i class="fas fa-user-friends me-5"></i>100 Mil</h5>
                              
                            </div>
                            <div class="card-footer bg-transparent border-success">Ver más...</div>
                          </div>
                    </div>
                    <div class="col-12 col-lg-3 p-2">
                        <div class="card  mb-3">
                            <div class="card-header bg-transparent border-success">Personas Totales</div>
                            <div class="card-body text-success">
                              <h5 class="card-title"><i class="far fa-user me-5"></i>0</h5>
                            </div>
                            <div class="card-footer bg-transparent border-success">Ver más...</div>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <!-- *graficos estadisticos -->
                    <div class="col-12 col-md-6 p-2 border">
                        <div class="card border-secondary mb-3" style="max-width: 50rem; height: 18rem;">
                            <div class="card-header"><i class="fas fa-chart-pie m-1"></i>Analisis de cliente</div>
                            <div class="card-body text-secondary">
                              <img class="img-fluid w-50 rounded mx-auto d-block" src="images/graficaTorta.png" alt="" srcset="">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 p-2 border">
                        <div class="card border-secondary mb-3" style="max-width: 50rem; height: 18rem;">
                            <div class="card-header"><i class="far fa-chart-bar me-1"></i>Analisis de venta</div>
                            <div class="card-body text-secondary">
                             <img class="img-fluid " src="images/graficabarras.png" alt="" srcset="">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <!-- *Resumen información del sitio -->
                    <div class="col-12 col-md-4 p-2 border">
                      <div class="card border-secondary mb-3" style="max-width: 50rem; height: 7rem;">
                        <div class="card-header text-dark">Actividad reciente</div>
                        <div class="card-body text-dark">
                          <p class="card-text">¡No hay resultados</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-8 p-2 border">
                      <!-- *Tabla de resumen -->
                      <table class="table table-hover">
                       
                        <thead>
                          <div class="col-12">
                            <nav class="navbar navbar-light bg-light">
                              <div class="container-fluid">
                                <a class="navbar-brand" href="#"><i class="fas fa-share me-1"></i>Últimos pedidos</a>
                              </div>
                            </nav>
                          </div>
                          
                          <tr>
                            <th scope="col">Id Orden</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha Ingresada</th>
                            <th scope="col">Total</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            </td>
                            <td>domingo, 01 de junio de 2021</td>
                            <td>$415000</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            </td>
                            <td>domingo, 13 de junio de 2021</td>
                            <td>$1105000</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>domingo, 18 de junio de 2021</td>
                            <td>$200000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>

            </div>
            
        </div>
        <div class="row">
          <!-- class="bg-primary text-white mt-1 text-center h-1" -->
          <p class="bg-secondary  mt-1 text-center h-1 d-block p-2 text-success">M&S © 2021 Todos los derechos reservados.
            Versión 1.1.1</p> 
      </div>
        
    </main>
    
  <script src="../../js/menu.js"></script>


    
</body>
</html>