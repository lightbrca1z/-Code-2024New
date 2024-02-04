// script.js
$(document).ready(function() {
    let slideIndex = 1;
    showSlides();

    // 前に戻るボタンのクリックイベント
    $("#prevBtn").on("click", function() {
        slideIndex--;
        if (slideIndex < 1) {
            slideIndex = 4; // 最初の画像に戻る
        }
        showSlides();
    });

    // 次に進むボタンのクリックイベント
    $("#nextBtn").on("click", function() {
        slideIndex++;
        if (slideIndex > 4) {
            slideIndex = 1; // 最後の画像に戻る
        }
        showSlides();
    });

    function showSlides() {
        let slides = $(".slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
});
