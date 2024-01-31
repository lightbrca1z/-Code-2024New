function counter(n){
    return{
        get count(){return n++;},
        set count(m){
            if(m>n) n = m;
            else throw Error("count can only be set to a larger value");
        }
    };
}

let c = counter(1000);
console.log(c.count);
console.log(c.count);
console.log(c.count = 2000);
console.log(c.count);
console.log(c.count = 2000);