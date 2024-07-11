window.onload = main;
function main() {
    document.title="DOM - Usando <span> e keyup"
    controlaInput();
}

function controlaInput() {
    var input = document.getElementById("txt_texto");
    input.onkeyup=function(event) {
        var span = document.getElementById("spn_texto");
        span.innerHTML=this.value;
        document.title=this.value;
    }
}