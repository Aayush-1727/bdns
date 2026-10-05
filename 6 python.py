1.  %localappdata% in search bar below > in that search for program folder > python folder > scripts and then copy path
2. paste the path in env variable
3. open cmd 
Pip install pymongo

4. Start new cmd and type mongod > Start one more cmd type mongo as a result we have mongo shell open .   
Save all files in .py

5. open IDLE :
 insert.py

from pymongo import MongoClient

client = MongoClient('localhost', 27017)

db = client.TYITDB239720

def insert():
    try:
        name1 = input("Enter the Name:")
        age1 = input("Enter the Age:")
        dept1 = input("Enter the Department:")
        pin1 = input("Enter the Pin No:")

        db.MyCol.insert_one({
            "name": name1,
            "age": age1,
            "dept": dept1,
            "pin": pin1
        })

        print("Inserted data successfully")

    except Exception as e:
        print(str(e))

insert()

on cmd : db.myCol.insert({ name: " ", age:  , dept" " , pin : " "  })
 "show dbs "and enter details

6.  update :

from pymongo import MongoClient

client = MongoClient('localhost', 27017)

db = client.TYITDB239720

def update():
    try:
        name1 = input("Enter the Name:")
        age1 = input("Enter the Age to update:")

        db.MyCol.update_one(
            {"name": name1},
            {"$set": {"age": age1}}
        )

        print("\nRecords updated successfully\n")

    except Exception as e:
        print(str(e))

update()

on  cmd: show dbs

7. retrieve:
from pymongo import MongoClient

client = MongoClient('localhost', 27017)

db = client.TYITDB239720

def read():
    try:
        Col = db.MyCol.find()

        print("\nAll data from database TYITDB239720:")

        for MyCol in Col:
            print(MyCol)

    except Exception as e:
        print(str(e))

read()

on  cmd: python read.py
show dbs

8. delete:

from pymongo import MongoClient

client = MongoClient('localhost', 27017)

db = client.TYITDB239720

def delete():
    try:
        name1 = input("Enter the name:")

        db.MyCol.delete_one({"name": name1})

        print("\nData deleted successfully")

    except Exception as e:
        print(str(e))

delete()

on  cmd: show dbs

