<?php
function validarEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
function validarNombre($nombre){
    return strlen($nombre) >= 2 && preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $nombre);
}

function validarTelefono($tlf){
    return preg_match("/^[0-9]{9}$/", $tlf);
}

function validarContrasena($pass){
    //La expresión regular comprueba que haya mínimo una minúscula, una mayúscula, un dígito y 8 caracteres
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $pass);
}
function validarFormulario($email, $nombre, $tlf, $pass){
    if(validarEmail($email)){
        if(validarNombre($nombre)){
            if(validarTelefono($tlf)){
                if(validarContrasena($pass)){
                    echo "Los valores son correctos" . "<br>";
                }
            }
        }
    }
    if(!validarEmail($email)){
        echo "El email no es valido" . "<br>";
    }
    if(!validarContrasena($pass)){
        echo "La contraseña no es valida" . "<br>";
    }
    if(!validarTelefono($tlf)){
        echo "El telefono no es valido" . "<br>";
    }
    if(!validarNombre($nombre)){
        echo "El nombre no es valido" . "<br>";
    }
}

echo "Validar email 1 (El correcto): " . (validarEmail("jganavas@gmail.com") ? "Válido" : "No válido") . "<br>";
echo "Validar email 2 (Erróneo): " . (validarEmail("122") ? "Válido" : "No válido") . "<br>";
echo "Validad nombre 1 (Correcto): " . (validarNombre("Pepe") ? "Válido" : "No válido") . "<br>";
echo "Validar nombre 2 (Erróneo): " . (validarNombre("__") ? "Válido" : "No válido") . "<br>";
echo "Validar tlf 1: " . (validarTelefono(666333666) ? "Válido" : "No válido") . "<br>";
echo "Validar tlf 2: " . (validarTelefono(7777777777777) ? "Válido" : "No válido") . "<br>";
echo "Validar contraseña 1: " . (validarContrasena("EstoEsUnaContraseña_123") ? "Válido" : "No válido") . "<br>";
echo "Validar contraseña 2: " . (validarContrasena("estonoesunacontraseña") ? "Válido" : "No válido") . "<br>";
echo "Validación formulario 1 (Correcta): <br>";
validarFormulario("jganavas@gmail.com", "Pepe", 666333666, "EstoEsUnaContraseña_123");
echo "Validación formulario 2 (Incorrecta total): <br>";
validarFormulario("jojojo23", "__2d", 7777777777777, "estonoesunacontraseña");
echo "Validación formulario 1 (Parcial): <br>";
validarFormulario("jganavas@gmail.com", "__2d", 666333666, "estonoesunacontraseña");
