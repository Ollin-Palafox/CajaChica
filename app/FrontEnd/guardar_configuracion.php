<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['id_usuario'])) {
    // Actualizar saldo
    $stmt = $pdo->prepare("
        UPDATE saldocaja 
        SET saldo_inicial = ?, monto_actual = ?
        WHERE id_saldo IN (
            SELECT id_saldo 
            FROM punteroreporte 
            WHERE id_reporte IN (
                SELECT id_reporte 
                FROM reporte 
                WHERE user = ?
            )
        )
    ");
    $stmt->execute([
        $_POST['saldo_inicial'],
        $_POST['saldo_inicial'],
        $_SESSION['id_usuario']
    ]);
    
    header('Location: configuracion.php');
}
?>