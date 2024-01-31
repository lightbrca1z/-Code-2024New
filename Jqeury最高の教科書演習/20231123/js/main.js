// $(function(){
//     $('#typo').css({
//         'font-size': '50px',
//         'background-color': '#ae5e9b',
//         'color': '#ebc000'
//     })
// });

//変数を用いたデータの再利用

// var arg = {
//     'font-size' : '50px',
//     'background-color': '#ae539b',
//     'color' : '#eee000'
// };

// $(function(){
// $('#typo').css(arg);
// $('header').css(arg);
// });

// オブジェクト

// var obj = {a:100, b:200};
// var data;

// data = obj.a + obj.b;
// data = obj['a'] + obj['b'];

// console.log(data);

//配列のデータ

// var array = [100,200,300];
// var sum;

// sum = array[0] + array[2];
// console.log(sum);
// sum = array[1] + array[2];
// console.log(sum);

// $(function(){
//     $('#typo').on('mouseover', function(){
//         $('#typo').css('color', '#ebc000');
//     });
// });

// $(function(){
//     $('#typo').on('mouseout', function(){
//         $(this).css('color', '#fff00');
//     });
// });

// $(function(){
//     $('#typo').on('mouseover', function(){
//         $(this).css('color', '#ebc000');
//     })
// });

// $(function(){
//     $('#typo').on('mouseout', function(){
//         $(this).css('color', '#fff00');
//     })
// });

$(function(){
    $('header, #typo, footer').on('mouseover', function(){
        $('header, #typo, footer').css(
            'background-color', '#ae6e9b'
        );
    });
});

$(function(){
    $('header, #typo, footer').on('mouseout', function(){
        $('header, #typo, footer').css(
            'background-color', ''
        );
    });
});