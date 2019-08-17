/*

Flag
flag1 = 4954404b4d54494c7b48
flag2 = 407264433064655f5040
flag3 = 7324773072647d

*/

#include <stdio.h>
#include <string.h>

void flag(){
	printf("SYSTEM# ");
	printf("Flag is IT@KMITL{W3ndy_@nd_J0y_1s_G0d}\n");
}

void main(){

	char password[128] = "P@ssw0rd!";
	char in[128];
	printf("\n __________:[ Yeri's Safe ]:__________\n");
	printf("|                                     |\n");
	printf("|     Secure safe from RedG0d Safe    |\n");
	printf("|_____________________________________|\n");
	printf("\nPASSWORD:> ");
	scanf("%s", in);
	if(strcmp(in, password)== 0){
		flag();
	}else{
		printf("SYSTEM:> ERR!! WRONG PASSWORD!\n");
	}
}
