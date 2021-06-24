function mudarCor() {   
     var cor = document.getElementById('t1').style.color;
    if(document.getElementById('t1').style.color == "rgb(255, 0, 0)"){ //verifica se a cor da letra é azul, sim muda a cor não volta para zul
        document.getElementById('t1').style.color ="#1500db";
        document.getElementById('t2').style.color ="#1500db";
        document.getElementById('t3').style.color ="#1500db";
    }else{
        document.getElementById('t1').style.color ="#f00";
        document.getElementById('t2').style.color ="#f00";
        document.getElementById('t3').style.color ="#f00";
    }    
}

