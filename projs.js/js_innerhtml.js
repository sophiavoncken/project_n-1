window.onload = main;
function main() {
    document.title="DOM - innerHTML";
    criaHTML();
}
function criaHTML() {
    //document.body.innerHTML="<p>Olá Mundo</p>";
    var conteudo = document.getElementById("conteudo");
    var tela = "<label id=\"lbl_codigo\"></label>"
             + "<input id=\"txt_codigo\">"
             + "<button id=\"btn_codigo\">Altera Label</button>"
             + "<button id=\"btn_input\">Altera Input</button>";
    conteudo.innerHTML=tela;
} 