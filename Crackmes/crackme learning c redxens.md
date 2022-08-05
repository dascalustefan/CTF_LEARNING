crackme

RedXen's Learning C CrackMe



Print characters
1..128 | %{"$_ $([char]$_)"}


to feed input to a file and get output from the program
Get-Content solution.txt | .\learningccrackme.exe > output.txt

This function compares the password entered with a dynamically built string and if it has a bigger char then you won
![](2022-07-28-23-15-38.png)
This function asks for the username
![](2022-07-28-23-16-23.png)
This function encrypts the name and sets the variable that you have to bypass in the password compare section
![](2022-07-28-23-20-51.png)

Solution:
![](2022-07-28-23-17-17.png)

To send solution:
Get-Content solution.txt | .\learningccrackme.exe > output.txt
