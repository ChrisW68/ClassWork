writeMe = 'Example text'

saveFile = open('exampleWrite.txt','w')
saveFile.write(writeMe)
#Must have save.File.close to make sure it closes the file
saveFile.close()