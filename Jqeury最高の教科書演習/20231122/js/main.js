// アニメーション基礎演習
// $(function(){
//     $('#typo').css('color', '#ebc000');
// });

// $(function(){
//     $('#typo .inner').css('transform', 'rotate(10deg)');
// });

// $(function(){
//     $('.page-main > div:nth-child(1) .inner').css('opacity', 0.5);
// });

// マウスオーバーのアニメーション
// $(function(){
//     $('.inner').on('mouseover', function(){
//         $('.inner').css('color', '#ebc000');
//     });
// });

// $(function(){
//     $('.inner').on('mouseout', function(){
//         $('.inner').css('color', '#fff');
//     });
// });

//マウスオーバー, マウスアウト
// $(function(){
//     $('#typo').on('mouseover', function(){
//         $('#typo').css({
//             color : '#ebc000',
//             backgroundColor: '#ae539b'
//         });
//     });
// });

// $(function(){
//     $('#typo').on('mouseout', function(){
//         $('#typo').css({
//             color : '',
//             backgroundColor: ''
//         });
//     });
// });

// フェードアウト　アニメーション
// $(function(){
//     $('#typo').on('click', function(){
//         $('#typo .inner').animate({
//             opacity: 0,
//             fontSize: '0px'
//         },
//         1500
//         );
//     });
// });

// $(function(){
//     $('#typo .inner').on('click', function(){
//         $('#typo .inner').animate({
//             color: '#ebc000'
//         },
//         1500
//         );
//     });
// });

//CSS　アニメーション
// $(function(){
//     $('#typo .inner')
//     .css('top', '-100px')
//     .on('click', function(){
//         $('#typo .inner').animate({
//             top: '100px'
//         },
//         1500,
//         'linear'
//         );
//     });
// });

// アニメーション　上下。
// $(function(){
//     $('#typo .inner')
//     .css('top', '-100px')
//     .on('click', function(){
//         $('#typo .inner').animate({
//             top: '100px'
//         },
//         1500,
//         function(){
//             $('#typo .inner').animate({top: '0px'}, 500);
//         }
//         );
//     });
// });

// //マウスオーバー, マウスアウト　②
// $(function(){
//     $('#typo').on('mouseover', function(){
//         $('#typo').animate({
//             backgroundColor: '#ae5e9b'
//         },
//         500
//         );
//     });
// });

// $(function(){
//     $('#typo').on('mouseout', function(){
//         $('#typo').animate({
//             backgroundColor: '#3498db'
//         },
//         500
//         );
//     });
// });

// //マウスオーバー, マウスアウト　③
$(function(){
    $('#typo').on('mouseover', function(){
        $('#typo').stop(true).animate({
            backgroundColor: '#ae5e9b'
        },
        500
        );
    });
});

$(function(){
    $('#typo').on('mouseout', function(){
        $('#typo').stop(true).animate({
            backgroundColor: '#3498db'
        },
        500
        );
    });
});