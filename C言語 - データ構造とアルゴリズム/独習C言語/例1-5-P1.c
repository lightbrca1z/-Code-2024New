#include <stdio.h>

int main(void){
    int i,j,k,z;

    printf("立方体の幅を入力してください: ");
    scanf("%d",&i);
    printf("立方体の長さを入力してください: ");
    scanf("%d",&j);
    printf("立方体の高さを入力してください: ");
    scanf("%d",&k);

    z = i*j*k;
    printf("\n");
    printf("立方体の面積は: %d" , z);
    printf("\n");

    return 0;
}