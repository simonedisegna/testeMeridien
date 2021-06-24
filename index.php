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
        <button type="button" onclick="mudarCor()" class="btn btn-danger" style="float:right; margin-right:20px">Mudar cor</button>
    </body>
</html>
<script src="assets/js/detalhe.js"></script>


