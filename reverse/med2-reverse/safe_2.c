#include <stdio.h>
#include <string.h>
#include <stdlib.h>
/*
char flag13[128] = "4954404b4d54494c7b48407264";
char flag37[128] = "433064655f50407324773072647d";
*/
char lock_ui[512] = "     ______________________________\n"
					"    |  __________________________  |\n"
					"    | |                          | |\n"
					"    | | PASSWORD:                | |\n"
					"    | |__________________________| |\n"
					"    |  __________________________  |\n"
					"    | |0|1|2|3|4|5|6|7|8|9|0|DEL | |\n"
					"    | |_|_|_|_|_|_|_|_|_|_|_|____| |\n"
					"    | |A|B|C|D|E|F|a|b|c|d|e|f|  | |\n"
					"    | |_|_|_|_|_|_|_|_|_|_|_|_|__| |\n"
					"    |      __________________      |\n"
					"    |     |______SUBMIT______|     |\n"
					"    |______________________________|\n";
					
char flag0[50] = "cC4b55CE0C591eDBc35cAE1a9DDEB9";
char flag1[50] = "fc8C80be7cFB4aa4ce8dC6b1D";
char flag2[50] = "Efb93e4CBEABAADcBbC6Fb8bEcD8";
char flag3[50] = "110aDC77f29450c38ce8AC1eafbc";
char flag4[50] = "5ffFb29fCCe03a74bABCfF85B9F5ad";
char flag5[50] = "15f2D3eba4D8f96FDC2BE4EbA6f";
char flag6[50] = "bB92A4EBcEB16b8eE7Fc9Aae";
char flag7[50] = "56db1B2dbc4b5af80Bc0c7c3D6d7aD";
char flag8[50] = "BaC6C8A78FecdebDE21eEE5A9b";
char flag9[50] = "7A031941daAe8638e5dabcaAfD5295";
char flag10[50] = "1b5e54B0EA2100cC6c4dE4BBbFF01";
char flag11[50] = "cCf7B1823823B935882D38c56beFEE";
char flag12[50] = "D631fBeaE0E054e3AB08B758a8EAD";
char flag13[50] = "4954404b4d54494c7b48407264"; // flag1
char flag14[50] = "cd75EC5b2dCCbFB5EDf9902E9C9";
char flag15[50] = "Ce636BECDCf1E12DF501AeaDBDD11";
char flag16[50] = "b5B13a54Caee59a236A31EA4";
char flag17[50] = "f8B8bf1f51AfA00e0f20445C0C";
char flag18[50] = "fCB62ceDa375Bfc0B9f8EBFf0Ef9A";
char flag19[50] = "cf232fe9e81c9494f08BE29CCE49b";
char flag20[50] = "0Eca16e8BbcB8BCa2ADB7AAA";
char flag21[50] = "7e8e63e97e4Ca75fb2b1e7E2daf";
char flag22[50] = "9f8CCCF7BaaDcef8C08F5b1E44";
char flag23[50] = "fafEaBB0F591DacbDA31a0B48A";
char flag24[50] = "064ADc66Fde64d13fFEA34C8B";
char flag25[50] = "18dB3EDB285fbBE0a2A2095c3f1";
char flag26[50] = "edEaAf8Fbde23A098CB3E83b687a";
char flag27[50] = "DDFa982C14243B9678BB37441e";
char flag28[50] = "A2fd39afFbDC13EEc9dE124f03";
char flag29[50] = "1ef015A933f2B21dFcFe32F34";
char flag30[50] = "c59AA9E1c9c3AbC9c8b3BA9B696";
char flag31[50] = "A41e63F1aa8c9D63facb99778f";
char flag32[50] = "29a1a79fe6B1b2515dbBDd4187";
char flag33[50] = "659eB60daf16B5f5B6bF249D3234";
char flag34[50] = "609FEc881c135f86bed4bAA29d5e";
char flag35[50] = "A42CAee8cd97694ddBddbB4b";
char flag36[50] = "3ebF6c200B2f65BEe3EECcd7188E";
char flag37[50] = "433064655f50407324773072647d"; //flag2
char flag38[50] = "15323DE0fc694da4F02d7Bd4cd60";
char flag39[50] = "dbECf9C07e477aBdbff3cfDF44f3A";
char flag40[50] = "0d6CDA3215Cb934a70aFE1CB867";
char flag41[50] = "FfF8593EB7283F23893b3a5d3205";
char flag42[50] = "0aCB5acfaa79cE345CF4AbDAcEEd1";
char flag43[50] = "CcBaE2Fd173b0e7cfEeED8DE7e";
char flag44[50] = "2DA5aA2Bdd5Db9F85420635De8a";
char flag45[50] = "Eda2A047217D3C16B9E3f83Bf1FBc";
char flag46[50] = "f74f81B098d8E4fb4e1f3eB75";
char flag47[50] = "DFd4DdDCc46D50CA47D11Fb4";
char flag48[50] = "73Da550B0AC32dAFcAa6dDbd9ffA";
char flag49[50] = "9B9BACc4D192dC93A33901f1c1fF1";
char flag50[50] = "bbfEc6C2Cd70fE78DEd3A54e";
char flag51[50] = "BeCC4a8fcFF87eBb36dE3871ee90bF";
char flag52[50] = "AE286Dc55a3cad52e8D6fD5A17de9";
char flag53[50] = "feBE35dCcEC9cC7fDd10d6a3aa";
char flag54[50] = "42BeC7b632BE77fBCB7b3F1Fd5C";
char flag55[50] = "bEb59f6b9A53eFcaBF630cb7dB7";
char flag56[50] = "BEE21d9B96aE91aBC4F5C26F";
char flag57[50] = "Fa3e79988BfBCE1C2B75B6EFcE";
char flag58[50] = "C6e9aFfa1d0d8698121E21A6b21f";
char flag59[50] = "b92A27Ffd8bb4B960cFBbB1c";
char flag60[50] = "4cc5DBac957605B31776466da6B2";
char flag61[50] = "7dE705ceAcf46Fc42Ace1d368e";
char flag62[50] = "C862a0B92Fe52c69645d5dD2ea";
char flag63[50] = "Ae1fc9f4Ac2eA3be60B7Ffb8ffa0D";
char flag64[50] = "Df95aa06e1AA2cEFFBa2F8ad6";
char flag65[50] = "3B5BF6dd4b454aD35c4C0cd2a3";
char flag66[50] = "743f8A9d7b43b3eaC150fBcFb0E07";
char flag67[50] = "59f0f9fd5Dcb2c463C0DbdbA18A9";
char flag68[50] = "FC2DfeC94BDf5fBdb975F3A0";
char flag69[50] = "C0cC246beB3abACCb97f4afE2ae7";
char flag70[50] = "c145aC1CC82DA30d26C9F2fA164D3";
char flag71[50] = "717Fdda505eb7aeFEcC684BBDa8CF";
char flag72[50] = "ed1dFEBb93A86dFdEAccE0Ecf8aDa";
char flag73[50] = "75CAb2D7C4fFa97bAE2255f8";
char flag74[50] = "59Df8bbe014A2fD4DAdE1Af1B31C7";
char flag75[50] = "C83F0d394B0C11FE2Fc775Eb86A";
char flag76[50] = "027E0821CA43aEBe78d04c21a8A82f";
char flag77[50] = "AA6f01E1a68b95AAF19A0fEb4Cf03A";
char flag78[50] = "Fa0aF4AAbaEc75a68fd4Dad4";
char flag79[50] = "7C5Cb7b7acbBCdBD5b46578fe5c32b";
char flag80[50] = "F28BFB51bb3E4DBaE6b2bAdBB8Cc5";
char flag81[50] = "69de04a3DE8BaBbdF2f0aFfBcEca8C";
char flag82[50] = "F86DA38cd0f8Ef73FEe3dD059aCCB";
char flag83[50] = "8dabecE1e9FfC0Ba5AB9f364";
char flag84[50] = "cAC42dC0907daaCf651FFebc548B6";
char flag85[50] = "b1a65bDc6AC7e49F1f33a8dfAF2a";
char flag86[50] = "AB5Efbe361cE8dbdB7E3789Ed";
char flag87[50] = "f26b7DBEBEd3CAC9F1Af4D6508";
char flag88[50] = "7edAe032a8D71a8b5F45EB7E2e";
char flag89[50] = "8f1f9d25E0ddB050B8Ff2ECfb";
char flag90[50] = "bC42f6CB6c52b1C65FfFCdAC548";
char flag91[50] = "326AeC0bFcB15beC4fC1A5FDc5A49";
char flag92[50] = "CB4bBdeaCD5adF8dC5F97b32d2";
char flag93[50] = "14dD96d4B1a79F18A93cB91eFA";
char flag94[50] = "6536dadCA06abF1BB2cfA1bDd03";
char flag95[50] = "Eae4DADA2F1FFbcBBF2AA2fde4a";
char flag96[50] = "6a8ea3ee788b31e4d4fa5B58";
char flag97[50] = "08CA280F4d55cb2cF3e6cb9EAD5";
char flag98[50] = "1Aeee4Fd553EDaB0e510b751";
char flag99[50] = "DCef54DCeA2b5fA9fB27AfE16f6e15";
char flag100[50] = "AFEccaDBcFdCABBCCFa3f25FA0BE";
char flag101[50] = "a9F0e0fcF27d50294Ddabe4BdBD1c";
char flag102[50] = "01EDe60dC04E0F725e6b82C7bb9Ab";
char flag103[50] = "BA9dffA5EBca6Ed3e4EE44d3b9E37F";
char flag104[50] = "AD1aBcbbC6aAd7cC7140bF7ff";
char flag105[50] = "6D6591dBDacC2Fb978bBFba6";
char flag106[50] = "Bf40fdAdE9111FFbEE425EcD7C3a13";
char flag107[50] = "3F20FeB38e42712bceD4e5b4F9a18";
char flag108[50] = "eD8a1bBD0f8E34e8dFB7E5cafb";
char flag109[50] = "Fa197Ef8fcd7DeE3896b96Dc4";
char flag110[50] = "DC8D98C6aeFA6701c7C3b8Cea3Ec4";
char flag111[50] = "A9Cf36dD7eeD8C84B4fdEae8bBFD5";
char flag112[50] = "c98f5Cfc1dE5E4A8d507cC7d";
char flag113[50] = "fFbDfa33Dd2bF1EdaE9128aC46b1";
char flag114[50] = "293dF89e5C7beE2de5BEE2b9991";
char flag115[50] = "eEFAbfDc377541A4e13Cb1DBFb";
char flag116[50] = "9f9a3AD7E706c9c6f5F3a6F49";
char flag117[50] = "cBffbf2c7c23bD3cf63e6cb1743dAE";
char flag118[50] = "3aAfA554daabC6f82fFe4aA30bE610";
char flag119[50] = "F2a8aC0FF7725AaEC78bC7aD";
char flag120[50] = "CAeEd87054CcA0d7B6ace16C0fd";
char flag121[50] = "e023A24f6edd7cFeEC102CdF98aC";
char flag122[50] = "C40Ed7C7fd495cfbeA3ccC4494";
char flag123[50] = "DDa8EfefC9ffbD985D14f30Fd8";
char flag124[50] = "af7C34aC7DD4AA75A03C0Cfc";
char flag125[50] = "f5aB43cC5bba0D20800A967a";
char flag126[50] = "49ED3F5a4E2CcdC6aEeBBbD4E0C";
char flag127[50] = "f3d8eDCf45Eba7f9EcF35f40";
char flag128[50] = "Db6D74a51ccaCaeacac9d8bc42dd3";
char flag129[50] = "fe093a73FC0E3D9ca8fB24A9";
char flag130[50] = "eA41aEBa3dbBABeb7C531940a13b1C";
char flag131[50] = "58d505E5AeBe6F3a10B253fA5";
char flag132[50] = "CF6be91A6be0442cfCFb55bE1dF";
char flag133[50] = "668E32355eafCbBa20aff392";
char flag134[50] = "d01CdE145aBA24ca53775aBf24";
char flag135[50] = "fbf77aBe14cc79fD9Cf4c23dcfdb4";
char flag136[50] = "01AECbD57cA2dF88049BD627E";
char flag137[50] = "4f2981FDAb6C38d1CBf57Ae4fEe0d7";
char flag138[50] = "9DF7FED15e9335742Ef4cF2D795";
char flag139[50] = "0e0B77255E8f9D5224f8e0Ea28";
char flag140[50] = "B6EDf6fd46E9f60E44b29fd3aAb6";
char flag141[50] = "c3ED19c88Fd4d9E65f6c5b0CAD5DdB";
char flag142[50] = "FfFCdc3fA0A59CAf324B81E54Bba74";
char flag143[50] = "38DdAEA3Cb575f9aFb44c9dE";
char flag144[50] = "C24AdbBB9c2FF7B4eBFadDc8E";
char flag145[50] = "e6077d7dA4E3EfBB9EB02fB9d";
char flag146[50] = "FEAC8dd7CCd4225BCa5485fABB";
char flag147[50] = "D1C3f919C4bFD242510bE5a5Af8bC2";
char flag148[50] = "aEDbAcD6f7594CB4F859b55cAD";
char flag149[50] = "fB538BDa9ceC34A6aCee0aAceA9";

void flag(){
	printf("SYSTEM: Password is a flag!\n");
}

void main(){
	char in[128];
	printf("%s", lock_ui);
	printf("\n");
	printf(" __________:[ Irene's Safe ]:_________\n");
	printf("|                                     |\n");
	printf("|  Ulta secure safe from RedG0d Safe  |\n");
	printf("|_____________________________________|\n");
	printf("\nPASSWORD[1/2]:> ");
	printf("");
	scanf("%[^\n]s", in);

	if(strcmp(in, flag13) == 0){
		printf("SYSTEM: PASSWORD 1 is Correct!\n");
		printf("PASSWORD[2/2]:> ");
		scanf(" %[^\n]s", in);
		if(strcmp(in, flag37) == 0){
			flag();
			exit(0);
		}
	}
	printf("SYSTEM: ERR!! WRONG PASSWORD!\n");
	
}
