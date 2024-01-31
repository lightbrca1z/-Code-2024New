/* 地球の日数を木星の年数(Jovian years)に変換するプログラム*/
#include <stdio.h>

int main(void){
    float e_days; /* 地球の日数 */
    float j_years; /* 木星での年数 */

    /* 地球での日数を得る */
    printf("地球での日数を入力してください: ");
    scanf("%f", &e_days);

    /* 木星での年数を計算 */
    j_years = e_days / (365.0 * 12.0);

    /* 答えを表示 */
    printf("地球での日数に相当する木星の年数: %f \n", j_years);

    return 0;
}