window.onload=main;
function main() {
    document.title="DOM - Fetch";
    controlaInput();
}
function controlaInput() { 
    document.getElementById("txt_url").focus();
    var button = document.getElementById("btn_pesquisa");
    button.onclick=pesquisar;
}
async function pesquisar() {
    var url = document.getElementById("txt_url");
    if (url.value == "") {
        alert("Digite a URL");
        url.focus();
    } else {
        const rettxt = await fetch(url.value);        
        document.getElementById("div_texto").innerHTML = (await rettxt.text());    
        const retjson = await fetch(url.value);        
        var json = await retjson.json();
        var msg = '';
        for (id in json){
            if (json.hasOwnProperty(id)) {
                 msg += id +": " + json[id]+"<br>";
            }
        }
        document.getElementById("div_json").innerHTML = (msg);    
    }
}