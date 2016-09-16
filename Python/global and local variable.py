x = 6

#bad practice
def example3():
	global x
	x += 1
	print(x)
print(example3())

def example():
	z = 5
	print(z)
print(example())

#best practice
def example2():
	z = 7
	print(z)
	y = x + 1
	print(y)

print(example2())

x = example2()

print(x)