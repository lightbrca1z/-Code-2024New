let amount = 0;

function appendToInput(value) {
    amount += value;
    document.getElementById('amountInput').value = amount;
    updateButtonStatus();
}

function clearInput() {
    amount = 0;
    document.getElementById('amountInput').value = amount;
    updateButtonStatus();
}

function downloadJuice() {
    if (amount >= 100) {
        alert('ジュースをダウンロードしました！');
        // ジュースをダウンロードするための処理を追加することができます
        // 例: ジュースを提供するAPIを呼び出すなど
        clearInput();
    } else {
        alert('金額が足りません。');
    }
}

function updateButtonStatus() {
    const downloadButton = document.getElementById('downloadButton');
    if (amount >= 100) {
        downloadButton.disabled = false;
    } else {
        downloadButton.disabled = true;
    }
}