var a = [1,2,3,4,5];
var b = 0;

for(var i = 0,len = a.length; i<len;i++){
    var num = a[i];
    if(num % 5 === 0){
        break;
    }else if(num % 2 === 1){
        continue;
    }
    b += num;
}
window.alert(b);