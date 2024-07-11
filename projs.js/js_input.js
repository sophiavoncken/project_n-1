function alteraLabel() {
var label = document.getElementById("lbl_codigo");
var txt = document.createTextNode("Seu Nome: ");
label.appendChild(txt);
label.setAttribute("for","txt_codigo");
}
var btn = document.getElementById("btn_codigo");
btn.onclick = function () {
    alteraLabel();
}

var btn2 = document.getElementById("btn_input");
btn2.onclick = function() {
    // alert("Cheguei aqui");
    var input = document.getElementById("txt_codigo");
    input.setAttribute("name","txt_codigo");
    input.setAttribute("autofocus","true");
    input.setAttribute("placeholder","Digite seu nome...");
    input.setAttribute("required","true");
    input.setAttribute("tabindex","1");
    input.setAttribute("maxlength","100");
    input.setAttribute("size","100");
    input.setAttribute("accesskey","N");
    input.setAttribute("autocomplete","off");
    input.style.color="white";
    input.classList.add("btn_input");
}