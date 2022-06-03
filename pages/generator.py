import sys
import time
import MySQLdb
import random

try:
    db = MySQLdb.connect("acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
                         "tfyzpqdq6g79p08e", "c3mo9vc983wlfxdg", "ywqt4t61mteo6bmu")
except MySQLdb.Error as e:
    print("No puedo conectar a la base de datos:", e)
    sys.exit(1)


cursor = db.cursor()
for num in range(0, 400):
    print(num)
    time.sleep(random.randint(25, 40))
    sql = "INSERT INTO `session` (`session_ip`) VALUES ('172.67.139.79')"
    try:
        cursor.execute(sql)
        db.commit()
    except:
        db.rollback()
db.close()
