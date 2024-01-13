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
        return true;
    }   
}



?> 
