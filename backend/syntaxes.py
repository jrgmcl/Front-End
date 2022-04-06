import sys

#Grab System Date and print
self.Date.setText(_translate("MainWindow", str(dt.strftime("%m/%d/%y"))))
self.Time.setText(_translate("MainWindow", str(dt.strftime("%H:%M%p"))))

#Define and update the Date and time
def update_label(self):
    dt = datetime.datetime.now()
    self.Date.setText(str(dt.strftime("%m/%d/%y")))
    self.Time.setText(str(dt.strftime("%H:%M%p")))

#Call the update labe this will loop every 2 seconds
timer = QtCore.QTimer()
timer.timeout.connect(ui.update_label)
timer.start(2000)

MainWindow.show()               #Window Mode
MainWindow.showFullScreen()     #Fullscreen Mode

#create shadow effect
from PyQt5.QtGui import *
from PyQt5.QtCore import *
from PyQt5.QtWidgets import *

shadow = QGraphicsDropShadowEffect()
shadow.setBlurRadius(15)
(object).setGraphicsEffect(shadow)


#convert .ui to .py
C:\Users\jrgmcl\AppData\Roaming\Python\Python39\Scripts\pyuic5.exe -x "C:\Users\jrgmcl\Documents\GUI_BACKEND\GUI.ui" -o "C:\Users\jrgmcl\Documents\GUI_BACKEND\GUI.py"


#convert .qrc to .py
C:\Users\jrgmcl\AppData\Roaming\Python\Python39\Scripts\pyrcc5.exe -o "C:\Users\jrgmcl\Documents\GUI_BACKEND\images\rsrc.py" "C:\Users\jrgmcl\Documents\GUI_BACKEND\images\rsrc.qrc"
#Then use this toimport the converted .qrc file 
from (folder) import (filename)
