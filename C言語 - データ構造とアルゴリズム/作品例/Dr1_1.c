/*
*
* ----------------------
*      Hornerの方法
* ----------------------
*
*/

#include <stdio.h>

double fn(double,double *,int);

void main(void)
{
    double a[]={1,2,3,4,5};
    double x;

    for(x=1;x<=5;x++){
        printf("fn(%f)=%f\n",x,fn(x,a,4));
    }
}
double fn(double x,double a[],int n)
{
    double p;
    int i;

    p=a[n];
    for(i=n-1;i>=0;i--){
        // printf("(p1=)%f\n",p);
        // printf("(x=)%f\n",x);
        // printf("(a[i]=)%f\n",a[i]);
        p=p*x+a[i];
        // printf("(p2=)%f\n",p);
    }
    return p;
}