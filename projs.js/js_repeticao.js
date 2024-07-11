var nome = "Sophia";
document.write("Variavel Nome: "+nome+"<br>");
var vetor = new Array(3);
vetor[0] = "Sophia";
vetor[1] = "Paula";
vetor[2] = "Fernanda";
document.write("<br>Vetor de três posições:<br>");
document.write("1a Posição: "+vetor[0]+"<br>");
document.write("2a Posição: "+vetor[1]+"<br>");
document.write("3a Posição: "+vetor[2]+"<br>");

// declarando o aray de forma simples
var carros = [];
carros[0] = "Fiat Uno";
carros[1] = "Corsa";
carros[2] = "Vetta";
document.write("<br>Lista de carros: <br>");
document.write("Carro 1: "+carros[0]+"<br>");
document.write("Carro 1: "+carros[1]+"<br>");
document.write("Carro 1: "+carros[2]+"<br>");

// declaração simplificada 
var bairros = ["Centro" , "Savassi" , "Sion"];
document.write("<br>Bairro 1: "+bairros[0]+"<br>");
document.write("Bairro 1: "+bairros[1]+"<br>");
document.write("Bairro 1: "+bairros[2]+"<br>");

//declaração de matriz
var uf = [];
uf[0] = []
uf[0][0] = "MG";
uf[0][1] = "Minas Gerais";
uf[1] = []; 
uf[1][0] = "SP";
uf[1][1] = "São Paulo";
uf[2] = [];
uf[2][0] = "ES";
uf[2][1] = "Espirito Santo";
document.write("<br>Lista de Cidades:<br>");
document.write("Estado 1: "+uf[0][0]+" "+uf[0][1]+"<br>");
document.write("Estado 2: "+uf[1][0]+" "+uf[1][1]+"<br>");
document.write("Estado 3: "+uf[2][0]+" "+uf[2][1]+"<br>");

// forma simplificada de matriz 
var ceps = [
    ["30000000", "Belo Horizonte"],
    ["40000000", "São Paulo"],
    ["50000000", "Espirito Santo"],
];
document.write("<br>Lista de CEPS: <br>");
document.write("CEP 1: "+ceps[0][0]+" "+ceps[0][1]+"<br>");
document.write("CEP 2: "+ceps[1][0]+" "+ceps[1][1]+"<br>");
document.write("CEP 3: "+ceps[2][0]+" "+ceps[2][1]+"<br>");

// lendo os arrays e matrizes
document.write("<br>Lendo os vetores e matrizes: <br>");
document.write("Vetores: <br>");
for (i=0;i<vetor.length;i++)
{
    document.write("Vetor "+i+": "+vetor[i]+"<br>");
}