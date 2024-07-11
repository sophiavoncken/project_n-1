from http.server import BaseHTTPRequestHandler, HTTPServer
import cgi

class Prog08(BaseHTTPRequestHandler): 
    def do_GET(self):
        self.send_response(200)
        self.send_header("Content-type","text/html; charset=utf-8")
        self.send_header("Refresh","1;URL=http://127.0.0.1:5500/prog08.html");
        self.end_headers()
        self.wfile.write(bytes("Você não pode chegar aqui<br>", "utf-8"))
        self.wfile.write(bytes("Redirecionando...", "utf-8"))        
    def do_POST(self):
        form = cgi.FieldStorage(
            fp=self.rfile,
            headers=self.headers,
            environ={'REQUEST_METHOD':'POST',
                     'CONTENT_TYPE': self.headers['Content-Type'],}
        )
        #
        nome=form.getvalue("txt_nome")
        telefone=form.getvalue("txt_telefone")
        #
        self.send_response(200)
        self.send_header("Content-type","text/html")
        self.end_headers()
        self.wfile.write(bytes("Nome: "+nome+"<br>", "utf-8"))
        self.wfile.write(bytes("Telefone: "+telefone+"<br>", "utf-8"))
        self.wfile.write(bytes("<a href='http://127.0.0.1:5500/prog08.html'>Voltar</a>","utf-8"))        

webServer = HTTPServer(("127.0.0.1",3507),Prog08)
print("Inicializando http://127.0.0.1:3507")
try:
    webServer.serve_forever()
except KeyboardInterrupt:
    pass
webServer.server_close()
print("Servidor Finalizado")