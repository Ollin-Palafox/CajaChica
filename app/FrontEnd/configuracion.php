<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Configuración - Sistema de Caja Chica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <img src="cajaChicaIcon.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                    <li class="nav-item"><a class="nav-link" style="font-size: 35px;" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" style="font-size: 35px;" href="#">Configuración</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 style="font-size: 40px;">Configuración</h1>
        <div class="card">
            <div class="card-header bg-primary text-white" style="font-size: 30px;">Opciones del sistema</div>
            <div class="card-body">
                
                <!-- Configuración de historial de transacciones -->
                <div class="mb-4">
                    <button class="btn btn-info" style="font-size: 25px;" data-bs-toggle="modal" data-bs-target="#historialModal">
                        Ver historial de transacciones
                    </button>
                </div>

                <!-- Modal para historial de transacciones -->
                <div class="modal fade" id="historialModal" tabindex="-1" aria-labelledby="historialModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="historialModalLabel" style="font-size: 30px;">Historial de Transacciones</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Tabla de historial de transacciones -->
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th style="font-size: 25px;">#</th>
                                            <th style="font-size: 25px;">Descripción</th>
                                            <th style="font-size: 25px;">Tipo</th>
                                            <th style="font-size: 25px;">Monto</th>
                                            <th style="font-size: 25px;">Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 20px;">1</td>
                                            <td style="font-size: 20px;">Compra de material</td>
                                            <td style="font-size: 20px;" class="text-danger">Egreso</td>
                                            <td style="font-size: 20px;">$500.00</td>
                                            <td style="font-size: 20px;">2025-03-20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 20px;">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
              
                <!-- Configuración de reposiciones -->
                <div class="mb-4">
                    <p style="font-size: 25px;">Aquí puedes modificar la configuración del presupuesto:</p>
                    <button class="btn btn-info" style="font-size: 25px;" data-bs-toggle="modal" data-bs-target="#configCajaChicaModal">
                        Configurar
                    </button>
                </div>

                <!-- Configuración de reposiciones (ventana emergente)-->
                 <!-- Modal para configuración de presupuesto de caja chica -->
<div class="modal fade" id="configCajaChicaModal" tabindex="-1" aria-labelledby="configCajaChicaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="configCajaChicaModalLabel" style="font-size: 30px;">Configuración de Presupuesto - Caja Chica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para configuraciones -->
                <form>
                    <div class="mb-3">
                        <label for="presupuestoInicial" class="form-label" style="font-size: 20px;">Presupuesto Inicial</label>
                        <input type="number" class="form-control" id="presupuestoInicial" placeholder="Ingrese el presupuesto inicial" required>
                    </div>
                    <div class="mb-3">
                        <label for="gastoMaximo" class="form-label" style="font-size: 20px;">Gasto Máximo Permitido</label>
                        <input type="number" class="form-control" id="gastoMaximo" placeholder="Ingrese el límite de gasto permitido" required>
                    </div>
                    <div class="mb-3">
                        <label for="moneda" class="form-label" style="font-size: 20px;">Moneda</label>
                        <select class="form-select" id="moneda" required>
                            <option value="" disabled selected>Seleccione la moneda</option>
                            <option value="MXN">MXN - Peso Mexicano</option>
                            <option value="USD">USD - Dólar Estadounidense</option>
                            <option value="EUR">EUR - Euro</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="font-size: 20px;">Guardar Configuración</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size: 20px;">Cerrar</button>
            </div>
        </div>
    </div>
</div>

                <!-- Reposición de fondos -->
                <div class="mb-4">
                    <label for="frecuenciaNotificaciones" style="font-size: 25px;">Reponer cantidad base:</label>
                    <p></p>
                    <button class="btn btn-warning" style="font-size: 25px;">
                        Reponer fondos
                    </button>
                </div>

                <!-- Configuración de visibilidad de reportes -->
                <div class="mb-4">
                    <label for="visibilidadReportes" style="font-size: 25px;">Visibilidad de reportes:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="visibilidadReportes">
                        <label class="form-check-label" for="visibilidadReportes" style="font-size: 22px;">
                            Mostrar reportes de todos los usuarios
                        </label>
                    </div>
                </div>

                <button class="btn btn-success" style="font-size: 25px;">Guardar cambios</button>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; 2025 CajaChica. Todos los derechos reservados.</p>
        <p>Hecho por Miguel Gutiérrez; Mateo Martinez; Ollin Palafox.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
