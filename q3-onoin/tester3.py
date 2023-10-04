import time
import sys
import string
import time
import threading
import random

count = 1
flag = "bYtE_BuStErS{$#Thisisurfirstflag#$}"

alph = string.ascii_letters
alpha ="abcdefghijklmnopqrstuvwxyzABCDEFG"
flag6 = list(alpha)

'''
flag6 = list(flag)
count = 5
flag6[count] = al[count]
flag6 = ''.join(flag6)
print(flag6)'''
al = "bYtE_BuStErS{$#Thisisurfirstflag#$}"
al1="THIS_IS_NOT_THE_REAL_FLAG_BEHIND_IT-"
def ct():
       global flag6
       x = random.randint(0, 32)
       flag6 = list(flag6)
       flag6[x] = al[x]
       flag6 = ''.join(flag6)
count = 0
choice =True
def ct1():


       global done
       global count
       global flag6
       x = random.randint(0, 32)
       flag6 = list(flag6)
       flag6[x] = al1[x]
       flag6 = ''.join(flag6)
       count = count + 1
       if count  == 100:
              done = False



done = True
def change():
       while True:

              global count
              sys.stdout.write('\r' + ' ' * len(str(flag)))
              sys.stdout.flush()


              if done:
                     ct1()
              else:
                     ct()
              # Update the variable (you can replace this with your own logic)
              sys.stdout.write('\r ' + flag6)
              sys.stdout.flush()

              time.sleep(0.2)

change()