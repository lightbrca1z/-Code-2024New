#include <stdio.h>

int main(void){

    float seconds,minutes,hours,years;
    seconds = 60.0;
    minutes = 60.0;
    hours = 24.0;
    years = 365.0;
    
    float result;
    result = seconds * minutes * hours * years;

    printf("一年の秒数は%f \n", result);

    return 0;
}