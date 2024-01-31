/*
*
* -------------------
*      バブル・ソート
* -------------------
*
*/

#include <stdio.h>

#define N 6

void main(void)
{
    int a[]={80,41,35,90,40,20};
    int t,i,j;

    for(i=0;i<N-1;i++){
        for(j=N-1;j>i;j--){
            if(a[j]<a[j-1]){
                t=a[j];
                printf("t1=%d",a[j]);
                printf("\n");
                a[j]=a[j-1];
                printf("a[j]=%d",a[j-1]);
                printf("\n");
                a[j-1]=t;
                printf("a[j-1]=%d",t);
                printf("\n");
                printf("\n");
            }
        }
    } 
    for(i=0;i<N;i++){
        printf("%d ",a[i]);
        printf("\n");
    }
    
}