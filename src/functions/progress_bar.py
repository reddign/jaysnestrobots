from tkinter import *
from tkinter.ttk import *
import time

def start():
    bar['value'] += 33
    if bar['value']== 33:
        orderText = "Order is confirmed."
    if bar['value']== 66:
        orderText = "Order is complete and on its way!"
    if bar['value']== 99:
        orderText = "Order has arrived."

orderText = StringVar()
window = Tk()
bar = Progressbar(window,orient=HORIZONTAL,length=300)
bar.pack(pady=50)

orderLabel = Label(window,textvariable=orderText).pack()

button = Button(window,text="next step",command=start).pack()
window.mainloop()