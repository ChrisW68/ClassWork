name = input('What is your name?: ')
print('Hello',name)

import statistics

exList = [3,5,9,41,25,1,5,6,7,12]

x = statistics.mean(exList)
print(x)

x=statistics.median(exList)
print(x)

x=statistics.mode(exList)
print(x)

x=statistics.stdev(exList)
print(x)

x=statistics.variance(exList)
print(x)
