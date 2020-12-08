#!/usr/bin/env python3
import time
from grovepi import *
import sys, getopt

leda= 3
pinMode(leda,"OUTPUT")
ledb = 4
pinMode(ledb,"OUTPUT")
    
#print ("Content-Type: text/plain;charset=utf-8")

def main(qq):
  input3=''
  input4=''
  try:
     opts, args = getopt.getopt(qq,"ha:b:")  # opts = [(-h,   )], opts = [(-a,on) ,(-b,off)], args = 剩餘
  except getopt.GetoptError:
     print ('cgi2.py  -a  <on/off>  -b  <on/off>')
     sys.exit(2)
  for op, ar in opts:
      if op == '-h':
         print ('cgi2.py  -a  <on/off >  -b <on/off > ')
         sys.exit()
      elif op in ("-a"):
         input3 = ar
      elif op in ("-b"):
         input4 = ar
  print ('Input D3"', input3)
  print ('Input D4"', input4)
  if input3.upper()=="ON":
     print("D3 ON")
     digitalWrite(leda,1)
  else:
     print("D3 OFF")
     digitalWrite(leda,0)
  if input4.upper()=="ON":
     print("D4 ON")
     digitalWrite(ledb,1)
  else:
     print("D4 OFF")
     digitalWrite(ledb,0)
if __name__ == "__main__":
  main(sys.argv[1:])
