try:
	# print('Running the try...')
	# import mars
	# print('5'+5)
	print(x)


except TypeError as t:
	print('TypeError triggered')


except NameError as n:
	print('NameError triggered')
	print(str(n))

except Exception as e:
	print('General Exception')
	print(str(e))