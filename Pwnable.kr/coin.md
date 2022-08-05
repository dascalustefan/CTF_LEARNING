coin


from pwn import *

def mains():
	io=remote('0', 9007)#'pwnable.kr'
	io.recvuntil('3 sec...')
	while True:
		a=io.recvuntil('C=',timeout=5)
		print(a)
		c=int(io.recvline().decode('ascii'))
		print(c)
		challenge=a.decode('ascii')
		n=int(challenge.split('N=')[1].split(' ')[0])
		def give_fake_req():
			io.sendline('0')
			io.recvline()
		def give_answer(coin):
			io.sendline(str(coin))
			recvs=io.recvline()
			print(recvs)
			if b'99' in recvs:
			  io.interactive()
		def weight(listoc):
			io.sendline(' '.join([str(i) for i in listoc]))
			k=int(io.readline())
			return k
		coins_to_weight=list(range(n))
		for i in range(c):
			if len(coins_to_weight)==1:
				give_fake_req()
				continue
			if weight(coins_to_weight[:int(n/2)])==int(n/2)*10:
				coins_to_weight=coins_to_weight[int(n/2):]
			else:
				coins_to_weight=coins_to_weight[:int(n/2)]
			n=len(coins_to_weight)
		print(coins_to_weight)
		give_answer(coins_to_weight[0])
		
		
		
mains()


[*] Switching to interactive mode
Congrats! get your flag
b1NaRy_S34rch1nG_1s_3asy_p3asy
