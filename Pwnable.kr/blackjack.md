blackjack
YaY_I_AM_A_MILLIONARE_LOL


Cash: $1000000500
-------
|D    |
|  9  |
|    D|
-------

Your Total is 9

The Dealer Has a Total of 6

Enter Bet: $


you can find the mistake by looking for anomalies in the code:

int betting() //Asks user amount to bet
{
 printf("\n\nEnter Bet: $");
 scanf("%d", &bet);
 
 if (bet > cash) //If player tries to bet more money than player has
 {
        printf("\nYou cannot bet more money than you have.");
        printf("\nEnter Bet: ");
        scanf("%d", &bet);
        return bet;
 }
 else return bet;
} // End Function

if you bet once a high ammount you can enter it again and it will get accepted
you only have to win once