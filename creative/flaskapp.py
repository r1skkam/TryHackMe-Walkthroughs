from flask import Flask, request, render_template, send_file
import requests

app = Flask(__name__, static_url_path='', 
            static_folder='static')
app.add_url_rule('/static/<path:filename>',
                 endpoint='my_static',
                 view_func=app.send_static_file)


@app.route('/', methods=['GET', 'POST'])
def ssrf():
    if request.method == 'POST':
        url = request.form['url']
        try:
            response = requests.get(url)
            if response.status_code == 200:
                return response.text
            else:
                return '<p> Dead </p>'
        except:
            return '<p> Dead </p>'
    return send_file('static/index.html')

if __name__ == '__main__':
    app.run(debug=False)
