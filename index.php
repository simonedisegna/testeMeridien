<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Teste Meridien Clube</title>
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px">
            <table class="table" id="tbteste">
                <thead>
                    <tr>
                        <th id="t1">Nome</th>
                        <th id="t2">Ano de Nascimento</th>
                        <th id="t3">Telefone</th>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ana Paula Guimarães</th>
                        <td><a href="#" onclick="verificarNiver('05/08/1978')">05/08/1978</a></td>
                        <td>5134937512</td>                    
                    </tr>
                    <tr>
                        <td>Bianca do Magistério</th>
                        <td><a href="#" onclick="verificarNiver('15/04/1995')">15/04/1995</a></td>
                        <td>5195263522</td>                    
                    </tr>
                    <tr>
                        <td>Paulo Adão Duarte</th>
                        <td><a href="#" onclick="verificarNiver('30/12/1958')">30/12/1958</a></td>
                        <td>5198525633</td>                    
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="#" data-toggle="modal" title="Verificar número de telefone" data-target="#listaTelefones" style="float:right; margin-right:20px" class="btn btn-success">Lista de telefones</a>
            <button type="button" onclick="mudarCor()" class="btn btn-danger" style="float:right; margin-right:20px">Mudar cor</button>
        </div>

        <script src="assets/js/detalhe.js"></script>
        <div class="modal fade" id="listaTelefones" tabindex="-1" role="dialog" aria-labelledby="dadostipo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content" style="width:800px; margin-left:-100px">                                          
                    <div class="modal-header">                                                        
                        <h5 class="modal-title" id="exampleModalLongTitle">Lista de telefones</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-danger" style="float:right">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        require_once 'assets/atributos/telefones.php';

                        echo "<lo>";
                        foreach ($telefones as &$value) {
                            echo "<li>" . formatarFone($value) . "</li>";
                        }
                        echo "</lo>";
                        ?>
                    </div>                                                   
                    <div class="modal-footer">                    
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>     
                    </div>               
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 80px; border-top:1px solid #cccccc; padding-top:10px">           
            <?php
            echo "<h3>Testa Classe</h3><br />";
            require_once 'controller/classe.php';
            $carro = new Carro;
            $carro->marca = "Kombi"; //váriável pública esta correta               
            $carro->setCor("branca");
            echo "<br />";
            echo "Marca: " . $carro->marca . "<br />";
            echo "Cor: " . $carro->getCor() . "<br />"; //forma correta
            ?>
        </div>
    </body>
</html>