/* 3つの間数を持つプログラム */

#include <stdio.h>

void func1(void); /* プロトタイプ　*/
void func2(void);

int main(void)
{
    func2();
    printf("3\n");

    return 0;
}

void func2(void)
{
    func1();
    printf("2 ");
}

void func1(void)
{
    printf("1 ");
}
