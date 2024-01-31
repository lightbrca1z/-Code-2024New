#include <stdio.h>

int main(void)
{
    int len, width;

    printf("長さを入力してください: ");
    scanf("%d", &len);

    printf("幅を入力してください: ");
    scanf("%d", &width);
    printf("\n");

    printf("面積は %d", len * width);
    printf("\n");
}