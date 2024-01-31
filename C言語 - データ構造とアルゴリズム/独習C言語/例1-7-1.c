/* 2つの間数を持つプログラム */

#include <stdio.h>

void func1(void);

int main(void)
{
    printf("私は");
    func1();
    printf("好きです\n");

    return 0;
}

void func1(void)
{
    printf("りんごが");
}

