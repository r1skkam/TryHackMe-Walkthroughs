import mysql.connector

db = mysql.connector.connect(
    host='localhost',
    database='app',
    user='app',
    password='s4Ucbrme'
    )
    
    cursor = db.cursor()
    cursor.execute('SELECT * FROM products')
    
    for product in cursor.fetchall():
        print(f'We have {product[2]}x {product[1]}')
        