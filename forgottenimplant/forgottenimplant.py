import http.server
import socketserver

PORT = 81

class MyRequestHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self): 
        self.send_response(200)
        self.send_header("Content-type", "text/plain")
        self.end_headers()
        self.wfile.write(b"ewogICAgImpvYl9pZCI6IDEwMSwKICAgICJjbWQiOiAiY2F0IHVzZXIudHh0Igp9")
with socketserver.TCPServer(("", PORT), MyRequestHandler) as httpd:
    print("Server listening on port", PORT)
    httpd.serve_forever()