we make a debug program
#include <stdio.h>
#include <string.h>
unsigned long hashcode = 0x21DD09EC;
unsigned long check_password(const char* p){
        int* ip = (int*)p;
        int i;
        int res=0;
        for(i=0; i<5; i++){
                res += ip[i];
                printf("%x " ,ip[i]);
        }
        printf("%x",res);
        return res;
}

int main(int argc, char* argv[]){
        if(argc<2){
                printf("usage : %s [passcode]\n", argv[0]);
                return 0;
        }
        if(strlen(argv[1]) != 20){
                printf("passcode length should be 20 bytes\n");
                return 0;
        }

        if(hashcode == check_password( argv[1] )){
                system("/bin/cat flag");
                return 0;
        }
        else
                printf("wrong passcode.\n");
        return 0;
}

This will print the numbers
Using this program we see the biggest challenge is realizing that little endian is used.
The next thing is seeing that we can give an argument with nonprintable strings using $(printf "\x01...")

┌──(kali㉿kali)-[~/Desktop]
└─$ ssh col@pwnable.kr -p2222
The authenticity of host '[pwnable.kr]:2222 ([128.61.240.205]:2222)' can't be established.
ECDSA key fingerprint is SHA256:I9nWMZvctQv4Vypnh9ICs6aB2g20WV/EjTIYJ83P0K8.
Are you sure you want to continue connecting (yes/no/[fingerprint])? yes
Warning: Permanently added '[pwnable.kr]:2222,[128.61.240.205]:2222' (ECDSA) to the list of known hosts.
col@pwnable.kr's password: 
Ubuntu comes with ABSOLUTELY NO WARRANTY, to the extent permitted by
applicable law.

 ____  __    __  ____    ____  ____   _        ___      __  _  ____  
|    \|  |__|  ||    \  /    ||    \ | |      /  _]    |  |/ ]|    \ 
|  o  )  |  |  ||  _  ||  o  ||  o  )| |     /  [_     |  ' / |  D  )
|   _/|  |  |  ||  |  ||     ||     || |___ |    _]    |    \ |    / 
|  |  |  `  '  ||  |  ||  _  ||  O  ||     ||   [_  __ |     \|    \ 
|  |   \      / |  |  ||  |  ||     ||     ||     ||  ||  .  ||  .  \
|__|    \_/\_/  |__|__||__|__||_____||_____||_____||__||__|\_||__|\_|
                                                                     
- Site admin : djang@sungshin.ac.kr
- IRC : irc.netgarage.org:6667 / #pwnable.kr
- Simply type "irssi" command to join IRC now
- files under /tmp can be erased anytime. make your directory under /tmp
- to use peda, issue `source /usr/share/peda/peda.py` in gdb terminal
You have mail.
Last login: Mon Jul 25 09:41:44 2022 from 125.179.74.130
col@pwnable:~$ ls
col  col.c  flag
col@pwnable:~$ cat col.c
#include <stdio.h>
#include <string.h>
unsigned long hashcode = 0x21DD09EC;
unsigned long check_password(const char* p){
        int* ip = (int*)p;
        int i;
        int res=0;
        for(i=0; i<5; i++){
                res += ip[i];
        }
        return res;
}

int main(int argc, char* argv[]){
        if(argc<2){
                printf("usage : %s [passcode]\n", argv[0]);
                return 0;
        }
        if(strlen(argv[1]) != 20){
                printf("passcode length should be 20 bytes\n");
                return 0;
        }

        if(hashcode == check_password( argv[1] )){
                system("/bin/cat flag");
                return 0;
        }
        else
                printf("wrong passcode.\n");
        return 0;
}
col@pwnable:~$ ./col $(printf "\x01\x01\x01\x01\x01\x01\x01\x01\x01\x01\x01\x01\x01\x01\x01\x01\xe8\x05\xd9\x1d")

daddy! I just managed to create a hash collision :)