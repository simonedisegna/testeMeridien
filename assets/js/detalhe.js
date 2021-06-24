function mudarCor() {
    var cor = document.getElementById('t1').style.color;
    if (document.getElementById('t1').style.color == "rgb(255, 0, 0)") { //verifica se a cor da letra é azul, sim muda a cor não volta para zul
        document.getElementById('t1').style.color = "#1500db";
        document.getElementById('t2').style.color = "#1500db";
        document.getElementById('t3').style.color = "#1500db";
    } else {
        document.getElementById('t1').style.color = "#f00";
        document.getElementById('t2').style.color = "#f00";
        document.getElementById('t3').style.color = "#f00";
    }
}

function verificarNiver(dt) {
    var dataAtual = new Date();
    var anoAtual = dataAtual.getFullYear();
    var anoNascParts = dt.split('/');
    var diaNasc = anoNascParts[0];
    var mesNasc = anoNascParts[1];
    var anoNasc = anoNascParts[2];
    var idade = anoAtual - anoNasc;
    var mesAtual = dataAtual.getMonth() + 1;
    //Se mes atual for menor que o nascimento, nao fez aniversario ainda;  
    if (mesAtual < mesNasc) {
        idade--;
    } else {
        //Se estiver no mes do nascimento, verificar o dia
        if (mesAtual == mesNasc) {
            if (new Date().getDate() < diaNasc) {
                //Se a data atual for menor que o dia de nascimento ele ainda nao fez aniversario
                idade--;
            }
        }
    }
   alert("A idade do usuário é "+idade);
}

