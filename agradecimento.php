<?php include 'cabecalho.php'?>
<?php
    $a = $_GET["acao"];
   // echo $a;
    include 'conexao.php';
    
    $sql = "INSERT INTO avaliacao (escolha)
    VALUES ('$a')";

    if ($conn->query($sql) === TRUE) {
       header("Refresh: 5;url=index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-sm-12 border text-center">
                <h2>OBRIGADO POR AVALIAR!!! SUA OPNIÃO É MUITO IMPORTANTE.</h2>
                <div class="spinner-border"></div>
            </div>          
        </div>
    </div>
        
<?php include 'rodape.php'?>