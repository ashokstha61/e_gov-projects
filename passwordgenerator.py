import random
lower="abcdefghijklmnopqrstuvwxyz"
upper="ABCDEFGHIJKLMNOPQRSTUVWXYZ"
NUMBER="0123456789"
SYMBOL="[]{}<>;:*-+/_=~!@#$%^&"

all=lower + upper + NUMBER + SYMBOL
length = 16

for i in range(0,17):
    password ="".join(random.sample(all,length))
    print"the password is:",password
    