import os
import wx
import shutil
import time
import wx.lib.agw.multidirdialog as MDD

wildcard = "All files (*.txt)|*.*"

class MyForm(wx.Frame):
    def __init__(self):
        wx.Frame.__init__(self, None, wx.ID_ANY,
                          "File and Folder Dialogs Transfer")
        panel = wx.Panel(self, wx.ID_ANY)
        self.currentDirectory = os.getcwd()
        
        #Action button to transfer files from src(source folder) to dst(destination folder)
        actBtn = wx.Button(panel, label="Transfer the file") 
        actBtn.Bind(wx.EVT_BUTTON, self.onDir)

        #put the buttons in a sizer
        sizer = wx.BoxSizer(wx.VERTICAL)
        sizer.Add(actBtn, 0, wx.ALL|wx.CENTER,5)
        panel.SetSizer(sizer)
        
    # Source and Destination of files.
    def onDir(src,dst):
        src = 'C:\\Users\\wise_\\Desktop\\Folder A'
        dst = 'C:\\Users\\wise_\\Desktop\\Folder B'

        for file in os.listdir(src):
            print file  # testing
            src_file = os.path.join(src, file)
            dst_file = os.path.join(dst, file)
            st=os.stat(src_file)
            #Source files age in seconds
            ctime=st.st_ctime
            #Converts time from seconds to hours
            mtime=(time.time() - ctime)/3600
            #If creation time is less than 24 hours then move files from source location to destination
            if mtime<24:
                shutil.move(src_file, dst_file)
                #Print all files that have been moved to destination location
                print dst_file
            else:
                #This will print the age of the files in hours
                print "file are: '%d' hours, since creation/modification" %mtime



#Run the program
if __name__ == "__main__":
    app = wx.App(False)
    frame = MyForm()
    frame.Show()
    app.MainLoop()
    
        
