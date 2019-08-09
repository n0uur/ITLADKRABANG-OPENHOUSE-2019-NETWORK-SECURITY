import random
pool = "0123456789abcdefABCDEF"
l = 20
for x in range(150):
	tmp = ""
	l = random.randint(24, 30)
	for i in range(l):
		index = random.randint(0, len(pool)-1)
		tmp += pool[index]
	print('char flag%d[50] = "%s";'%(x, tmp))
