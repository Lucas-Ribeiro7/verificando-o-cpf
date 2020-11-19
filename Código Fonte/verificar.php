<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Verificador de CPF</title>
</head>
<body>
    <?php
        $cpf_rec = $_POST['cpf'];
        echo "CPF digitado: $cpf_rec<br>";
        verificarCpf($cpf_rec);

        function verificarCpf($cpf_rec){
            $cpf = str_split($cpf_rec);
            if(count($cpf) == 11){
                $resultado = array_sum($cpf);                    
                $verificar = str_split($resultado);
                if($verificar[0] == $verificar[1]){
                    echo "<h2>CPF Válidado!</h2>";
                }else{
                    echo "<h2>CPF Inválido!</h2>";
                }
            }else{
                echo "<h2>CPF Inválido! Não foi preenchido os 11 dígito</h2>";
            }
            
        }               
    ?> 
    <button><a href="index.php">Voltar</a></button>
    
       
</body>
</html>
