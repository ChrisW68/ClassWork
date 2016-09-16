appendMe = "Here is some more text"

# 'a' is for append
saveFile = open('exampleFile.txt','a')
# \n makes new line
saveFile.write('\n')
saveFile.write(appendMe)
saveFile.close()

