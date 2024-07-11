from http.server import BaseHTTPRequestHandler, HTTPServer

class Prog07(BaseHTTPRequestHandler): 
    def do_GET(self):
        self.send_response(200)
        self.send_header("Content-type","text/html; charset=utf-8")
        self.end_headers()
        self.wfile.write(bytes("Meu primeiro retorno em HTML - Igão", "utf-8"))

webServer = HTTPServer(("127.0.0.1",8002),Prog07)
print("Inicializando http://127.0.0.1:8002")
try:
    webServer.serve_forever()
except KeyboardInterrupt:
    pass
webServer.server_close()
print("Servidor Finalizado")