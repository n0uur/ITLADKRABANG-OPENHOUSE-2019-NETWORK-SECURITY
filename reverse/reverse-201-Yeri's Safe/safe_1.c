/*
 _______________
|  ___________  |
| | PASSWORD: | |
| |___________| |
|  ___ ___ ___  |
| | 7 | 8 | 9 | |
| |___|___|___| |
| | 4 | 5 | 6 | |
| |___|___|___| |
| | 1 | 2 | 3 | |
| |___|___|___| |
| | . | 0 | N | |
| |___|___|___| |
|  ___________  |
| |___ENTER___| |
|_______________|


*/

#include <stdio.h>
char lock_ui[512] = "\t    _______________\n"
					"\t   |  ___________  |\n"
					"\t   | | PASSWORD: | |\n"
					"\t   | |___________| |\n"
					"\t   |  ___ ___ ___  |\n"
					"\t   | | 7 | 8 | 9 | |\n"
					"\t   | |___|___|___| |\n"
					"\t   | | 4 | 5 | 6 | |\n"
					"\t   | |___|___|___| |\n"
					"\t   | | 1 | 2 | 3 | |\n"
					"\t   | |___|___|___| |\n"
					"\t   | | . | 0 | N | |\n"
					"\t   | |___|___|___| |\n"
					"\t   |  ___________  |\n"
					"\t   | |___ENTER___| |\n"
					"\t   |_______________|\n";

char hint[128] = "Password is 10 digits.";
void flag(){
	printf("SYSTEM# ");
	printf("Flag is IT@KMITL{password of this safe}\n");
}

void main(){

	int p = 3141592653;
	int in;
	printf("%s", lock_ui);
	printf("\n __________:[ Yeri's Safe ]:__________\n");
	printf("|                                     |\n");
	printf("|  Super secure safe from RedG0d Safe |\n");
	printf("|_____________________________________|\n");
	printf("\nPASSWORD:> ");
	scanf("%d", &in);
	if(p == in){
		flag();
	}else{
		printf("SYSTEM:> ERR!! WRONG PASSWORD!\n");
	}
}
