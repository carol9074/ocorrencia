<?php

class helpers{


    public function validarCPF($cpf) {
        // Remover caracteres não numéricos
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        $soma = 0;
    
        // Verificar se o CPF tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }
    
        // Verificar se todos os dígitos são iguais (caso contrário, não é um CPF válido)
        if (preg_match('/^(\d)\1*$/', $cpf)) {
            return false;
        }
    
        // Calcular e verificar o primeiro dígito verificador
        for ($i = 9, $j = 0; $i > 1; $i--, $j++) {
            $soma += $cpf[$j] * $i;
        }
        $resto = $soma % 11;
        $digitoVerificador1 = ($resto < 2) ? 0 : 11 - $resto;
    
        if ($cpf[9] != $digitoVerificador1) {
            return false;
        }
    
        // Calcular e verificar o segundo dígito verificador
        for ($i = 10, $j = 0; $i > 1; $i--, $j++) {
            $soma += $cpf[$j] * $i;
        }
        $resto = $soma % 11;
        $digitoVerificador2 = ($resto < 2) ? 0 : 11 - $resto;
    
        if ($cpf[10] != $digitoVerificador2) {
            return false;
        }
    
        return true;
    }   
}


?> 