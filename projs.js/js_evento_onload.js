indow.onload = main;

function main() { 
    document.title="DOM - Eventos";
    criaBotao();
}
function criaBotao() {
    var conteudo = document.getElementById("conteudo");
    var btn = document.createElement("button");
    btn.setAttribute("id","btn_titulo");
    btn.setAttribute("accesskey","T");
    var txt = document.createTextNode("Altera Titulo");
    btn.appendChild(txt);
    conteudo.appendChild(btn);
    btn.onclick=function() { 
        var titulo = prompt("Digite o titulo da pagina");
        document.title = titulo;
    }
}