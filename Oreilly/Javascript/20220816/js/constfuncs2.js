function constfuncs(){
    let funcs = [];
    for(var i = 0;i < 10; i++){
        funcs[i] = () => i;
    }
    return funcs;
}

let funcs = constfuncs();
console.log(funcs[5]());