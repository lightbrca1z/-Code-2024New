let chuka = ["八宝菜","餃子","回鍋肉","青椒肉絲"];

//配列の末尾に"天津飯"を追加
chuka.push("天津飯");
console.log(chuka);

//配列の先頭に"チャーハン"を追加
chuka.unshift("チャーハン");
console.log(chuka);

//配列の先頭の要素を削除
chuka.shift();
console.log(chuka);

//配列の末尾の要素を削除
chuka.pop();
console.log(chuka);

//配列の添字が2の要素を削除
chuka.splice(2,1);
console.log(chuka);

//餃子のインデックスを確認
console.log(chuka.indexOf("餃子"));

//配列["杏仁豆腐","ごま豆腐"]を後ろに結合
chuka = chuka.concat(["杏仁豆腐","ごま豆腐"]);
console.log(chuka);

//添字(1,2,3)の要素を複製
let NewChuka = chuka.slice(1,4);
console.log(chuka);


//配列を逆に整列。
NewChuka.reverse();
console.log(NewChuka);

//"八宝菜"が含まれてるか確認
console.log(NewChuka.includes("八宝菜"));


