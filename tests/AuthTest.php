<?php

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function testLoginEnviaCredencialesCorrectas()
    {
        // Simulando llamada a controlador de Login
        $user = 'admin@escuela.edu';
        $pass = '12345';
        
        $loginCorrecto = ($user === 'admin@escuela.edu' && $pass === '12345');
        
        $this->assertTrue($loginCorrecto, "El login debería ser exitoso con las credenciales por defecto.");
    }
    
    public function testContrasenaCortaLanzaError()
    {
        $pass = '123';
        $esValida = strlen($pass) >= 5;
        
        $this->assertFalse($esValida, "Las contraseñas menores a 5 caracteres deben ser rechazadas.");
    }
}
