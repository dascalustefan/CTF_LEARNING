
Step 1 install python3.7 because it was compiled with 3.7

Step 2 use pyinstxtractor.py to extract the files

Step3 use uncompyle6 to get the source code

Step4 profit




# Embedded file name: CrackTool.py
from time import sleep
Pass = 'YouSuccCracked'
print('----------')
print('Welcome To Crack Tool')
print('Options \n 1.Register')
exc = input('Select Option > ')
if exc == '1':
    print(f"You Selected {exc} Option")
else:
    print('You Dont Select Any Option')
    sleep(3)
    exit()
opt1_function_name = input('Enter Your Name > ')
opt1_function_obf = input('Enter Password > ')
if opt1_function_obf != Pass:
    print('Incorrect Password!')
    sleep(3)
    exit()
else:
    if opt1_function_obf == Pass:
        print(f"Correct! You Successfuly Registered as {opt1_function_name}")
        sleep(3)
        exit()
    else:
        print('Error')
# okay decompiling CrackTool.pyc



Welcome To Crack Tool
Options
 1.Register
Select Option > 1
You Selected 1 Option
Enter Your Name > YouSuccCracked
Enter Password > YouSuccCracked
Correct! You Successfuly Registered as YouSuccCracked