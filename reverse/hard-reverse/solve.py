import binascii
string1=""" mov     [ebp+var_1B5E], '4594'
mov     [ebp+var_1B5A], 'b404'
mov     [ebp+var_1B56], '45d4'
mov     [ebp+var_1B52], 'c494'
mov     [ebp+var_1B4E], '84b7'
mov     [ebp+var_1B4A], '2704'
mov     [ebp+var_1B46], '46'"""

string2 = """ mov     [ebp+var_16AE], '0334'
mov     [ebp+var_16AA], '5646'
mov     [ebp+var_16A6], '05f5'
mov     [ebp+var_16A2], '3704'
mov     [ebp+var_169E], '7742'
mov     [ebp+var_169A], '2703'
mov     [ebp+var_1696], 'd746'"""
def decoder(string1):
    flag1 = "".join([i.split(",")[1] for i in string1.split("\n")]) #use only string value Ex 'b404'
    flag1 = "".join([i.strip("'")[::-1] for i in flag1.split(" ")]) #[::-1] Little-endian 
    return binascii.unhexlify(flag1) # hex to ascii

print(decoder(string1)+decoder(string2))
