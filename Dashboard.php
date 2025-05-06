<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/modoOscuro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link rel="stylesheet" href="css/edit_profile.css">
    <title>Panel De Control dashboard</title>
</head>
<?php include 'php/verificar_sesion.php' ?>

<body>
    <div class="principal">
        <div class="menu-lat">
            <div class="menu">
                <div class="imagen">
                    <a href="PanelDeControl.php">
                        <img src="IMG/logo1.png" alt="">
                    </a>
                </div>

                <div class="menu-prin">
                    <div class="menu-1">
                        <div class="input-div">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="2.5">
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="search" placeholder="search" id="menuSearch">
                        </div>
                        <a href="PanelDeControl.php" class="menu-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="1.75">
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M13.41 10.59l2.59 -2.59"></path>
                                <path d="M7 12a5 5 0 0 1 5 -5"></path>
                            </svg>
                            <h3>Panel de control</h3>

                        </a>
                        <a href="Alertas.php" class="menu-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="1.75">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                <path d="M12 8v4"></path>
                                <path d="M12 16h.01"></path>
                            </svg>
                            <h3>Alertas</h3>
                        </a>
                        <a href="" class="menu-item" id="menuNotificaciones">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="1.75">
                                <path
                                    d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                </path>
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                            </svg>
                            <h3>Notificaciones</h3>
                        </a>
                        <a href="Dashboard.php" class="menu-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="1.75">
                                <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1">
                                </path>
                                <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1">
                                </path>
                                <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1">
                                </path>
                                <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1">
                                </path>
                            </svg>
                            <h3>Dashboard</h3>
                        </a>
                        <a href="Dispositivo.php" class="menu-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-device-watch">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 9a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3v-6z" />
                                <path d="M9 18v3h6v-3" />
                                <path d="M9 6v-3h6v3" />
                            </svg>
                            <h3>Dispositivo</h3>
                        </a>
                        <li class="lista">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <a href="Usuario.html">Usuarios</a>
                            <ul class="submenu">
                                <li><a href="Usuario.html">Usuarios Administrativos</a></li>
                                <li><a href="UsuarioMaxAdmin.php">Máximo Administrador</a></li>
                            </ul>
                        </li>
                         <a href="contactos.php" class="menu-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-address-book">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z" />
                                <path d="M10 16h6" />
                                <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M4 8h3" />
                                <path d="M4 12h3" />
                                <path d="M4 16h3" />
                            </svg>
                            <h3>Contactos</h3>
                        </a>
                        <a href="Configuracion.php" class="menu-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="1.75">
                                <path
                                    d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                                </path>
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                            </svg>
                            <h3>Configuración</h3>
                        </a>
                    </div>
                    <hr class="linea">
                    <!-- guia de usuario menu 2 -->
                    <div class="menu-1">

                        <button href="" class="menu-item" onclick="toggleGuide()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="1.75">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                <path d="M12 16v.01"></path>
                                <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
                            </svg>
                            <h3>Guía de usuario</h3>
                        </button>
                        <a href="login.html" class="menu-item">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="32"
                                height="32" stroke-width="1.75">
                                <path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                </path>
                                <path d="M9 12h12l-3 -3"></path>
                                <path d="M18 15l3 -3"></path>
                            </svg>
                            <h3>Cerrar Sesión</h3>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="derecha">
            <div class="header">
                <h2 class="titulo">Dashboard</h2>
                <div class="datos">
                    <div class="perfil">
                        <img src="IMG/Victoria.png" alt="">
                        <div class="online"></div>
                        <h2>Victoria</h2>
                    </div>
                    <!-- Popup Modal para Editar Perfil -->
                    <div class="perfil-modal" id="perfilModal">
                        <div class="perfil-modal-content">
                            <div class="perfil-modal-header">
                                <h3>Editar Perfil</h3>
                                <span class="close-perfil">&times;</span>
                            </div>
                            <div class="perfil-modal-body">
                                <div class="perfil-imagen-container">
                                    <img id="perfilPreview" src="IMG/Victoria.png" alt="Foto de perfil">
                                    <input type="file" id="perfilImagen" accept="image/*" style="display: none;">
                                    <button id="cambiarFotoBtn" class="btn-cambiar-foto">Cambiar Foto</button>
                                </div>
                                <div class="perfil-form">
                                    <div class="form-group">
                                        <label for="nombreUsuario">Nombre</label>
                                        <input type="text" id="nombreUsuario" value="Victoria">
                                    </div>
                                    <button id="guardarPerfil" class="btn-guardar">Guardar Cambios</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Notificaciones" id="Notificaciones">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="32" height="32" stroke-width="1.75">
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                            </path>
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        </svg>
                        <div class="notificaciones-container">
                            <p class="recientes">Notificaciones recientes</p>
                            <div class="noti-1">
                                <img src="IMG/circle-noti.png" alt="notificacion" class="circulo">
                                <p class="p1">Alertas: Dispositivo</p>
                                <p class="p2">+7 Reportes en Santo Domingo</p>
                            </div>
                            <div class="noti-2">
                                <img src="IMG/circle-noti.png" alt="notificacion" class="circulo-2">
                                <p class="p1">Alertas: Dispositivo</p>
                                <p class="p2">+7 Reportes en Santo Domingo</p>
                            </div>
                            <div class="noti-3">
                                <img src="IMG/circle-noti.png" alt="notificacion" class="circulo-3">
                                <p class="p1">Alertas: Dispositivo</p>
                                <p class="p2">+7 Reportes en Santo Domingo</p>
                            </div>
                            <div class="noti-4">
                                <img src="IMG/circle-noti.png" alt="notificacion" class="circulo-4">
                                <p class="p1">Alertas: Dispositivo</p>
                                <p class="p2">+7 Reportes en Santo Domingo</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- dashboard -->

            <div class="dashboard-container">
                <div class="stats">
                    <div class="stat-card">
                        <div>
                            <h3>Total Dispositivos</h3>
                            <div class="number">156</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-device-watch">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 9a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3v-6z" />
                            <path d="M9 18v3h6v-3" />
                            <path d="M9 6v-3h6v3" />
                        </svg>
                    </div>
                    <div class="stat-card">
                        <div>
                            <h3>Usuarios Registrados</h3>
                            <div class="number">2,847</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>

                    </div>
                    <div class="stat-card">
                        <div>
                            <h3>Denuncias Activas</h3>
                            <div class="number">342</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor"
                            class="icon icon-tabler icons-tabler-filled icon-tabler-exclamation-circle">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M17 3.34a10 10 0 1 1 -15 8.66l.005 -.324a10 10 0 0 1 14.995 -8.336m-5 11.66a1 1 0 0 0 -1 1v.01a1 1 0 0 0 2 0v-.01a1 1 0 0 0 -1 -1m0 -7a1 1 0 0 0 -1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0 -1 -1" />
                        </svg>
                    </div>
                    <div class="stat-card">
                        <div>
                            <h3>Denuncias Resueltas</h3>
                            <div class="number">1,205</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-checkbox">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 11l3 3l8 -8" />
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                        </svg>
                    </div>
                </div>



                <div class="charts-grid">
                    <div class="chart-container">
                        <canvas id="provinciasChart"></canvas>
                    </div>
                    <div class="chart-container">
                        <canvas id="denunciasChart"></canvas>
                    </div>
                </div>
            <div class="stats-modern">
                <div class="stat-modern-card">
                    <div class="stat-content">
                        <h3>Denuncias por Bocinas</h3>
                        <div class="number">723</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 8a5 5 0 0 1 0 8" />
                        <path d="M17.7 5a9 9 0 0 1 0 14" />
                        <path
                            d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
                    </svg>
                </div>
            
                <div class="stat-modern-card">
                    <div class="stat-content">
                        <h3>Denuncias por Vehículos</h3>
                        <div class="number">133</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                    </svg>
                </div>
            
                <div class="stat-modern-card">
                    <div class="stat-content">
                        <h3>Denuncias por Construcciones</h3>
                        <div class="number">226</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 21l18 0" />
                        <path d="M9 8l1 0" />
                        <path d="M9 12l1 0" />
                        <path d="M9 16l1 0" />
                        <path d="M14 8l1 0" />
                        <path d="M14 12l1 0" />
                        <path d="M14 16l1 0" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                    </svg>
                </div>
            
                <div class="stat-modern-card">
                    <div class="stat-content">
                        <h3>Total de Denuncias</h3>
                        <div class="number">1,547</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 12l5 5l10 -10" />
                        <path d="M2 12l5 5m5 -5l5 -5" />
                    </svg>
                </div>
            </div>
                <div class="chart-container-map">
                    <div id="map"></div>
                </div>

            </div>


        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/PanelControl.js"></script>
    <script src="js/modoOscuro.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>