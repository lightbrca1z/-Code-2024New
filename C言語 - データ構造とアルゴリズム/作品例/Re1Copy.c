#include <stdio.h>

long combi(int,int);

int main(void){
    int num1, num2;
    printf("hello world!\n");
    printf("漸化式に使う数字を2つ入力してください！:\n");
    scanf("%d %d",&num1,&num2);
    printf("入力された数字は　：　%d %d\n",num1,num2);
    printf("%dC%d=%ld\n",num1,num2,combi(num1,num2));
    return 0;
}

long combi(int n,int r){
    int i;
    long p=1;

    for(i=1;i<=r;i++){
        p=p*(n-i+1)/i;
    }
    
    return p;
}