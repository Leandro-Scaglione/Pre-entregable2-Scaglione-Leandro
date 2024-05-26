<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y procesar los datos del formulario
    $name = $_POST['Nombre y Apellido'];
    $email = $_POST['email'];
    $name = $_POST["Telefono"];

    // Validar y/o guardar los datos, o realizar alguna acción con ellos
    echo "Nombre y Apellido: " . htmlspecialchars($nombre) . "<br>";
    echo "Email: " . htmlspecialchars($email); . "<br>";
    echo "Telefono: " . htmlspecialchars($email);
}