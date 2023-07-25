#!C:\Users\User\AppData\Local\Programs\Python\Python39\python.exe
import cgi
print("Content-type: text/html\r\n\r\n")
print("<html><body>")
form = cgi.FieldStorage()
if form.getvalue("name"):
    name = form.getvalue("name")
    password = form.getvalue("password")
    print("<h1>Hello '"+name+"' ! Thanks for using my Program!</h1>")
    print("<h1>Your Password is '"+password+"'... Use this Password for Login !</h1><br />")
  
# Using HTML input and forms method
print("<form method='post' action='test.py'>")
print("<p>Name: <input type='text' name='name' /></p>")
print("<p>Password: <input type='text' name='password' /></p>")
print("<input type='submit' value='Submit' />")
print("</form")
print("</body></html>")
