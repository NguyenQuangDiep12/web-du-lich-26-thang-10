function toggleTheme(event) {
    event.preventDefault(); // Ngăn hành vi mặc định của thẻ <a>

    const body = document.body;
    const themeIcon = document.getElementById("theme-icon");

    // Kiểm tra và chuyển đổi class "dark-theme" và "light-theme"
    if (body.classList.contains('dark-theme')) {
        body.classList.remove('dark-theme');
        body.classList.add('light-theme');
        themeIcon.src = 'images/sun-icon.png';
        localStorage.setItem('theme', 'light'); // Lưu trạng thái light
    } else {
        body.classList.remove('light-theme');
        body.classList.add('dark-theme');
        themeIcon.src = 'images/moon-icon.png';
        localStorage.setItem('theme', 'dark'); // Lưu trạng thái dark
    }
}

// Hàm kiểm tra trạng thái theme khi tải trang
function loadTheme() {
    const body = document.body;
    const themeIcon = document.getElementById("theme-icon");

    // Lấy trạng thái theme từ localStorage
    const savedTheme = localStorage.getItem("theme");

    // Áp dụng trạng thái theme đã lưu
    if (savedTheme === "dark") {
        body.classList.add("dark-theme");
        themeIcon.src = "images/moon-icon.png"; // Icon giao diện tối
    } else {
        body.classList.add("light-theme");
        themeIcon.src = "images/sun-icon.png"; // Icon giao diện sáng
    }
}

// Đợi DOM tải xong rồi gọi hàm loadTheme
document.addEventListener("DOMContentLoaded", loadTheme);


// xử lý click vào box hiện ra title box
let titleInfoBox = document.getElementById('title_detail_carousel');
let imageTitleBox = document.querySelectorAll('.destination-card');
let closeBtnTitle = document.getElementById('closeBtnTitle');
imageTitleBox.forEach((box) => {
    let ImageElement = box.querySelector('img');
    ImageElement.addEventListener('click', () => {
        titleInfoBox.style.display = "block";
    });
    closeBtnTitle.addEventListener('click', () => {
        titleInfoBox.style.display = "none";
    })
})


// xử lý tour-booking
const giaBinhDan = 14490000;
const giaSell = 16990000;

let countNumberInputPassenger1 = document.getElementById('input-passenger1');
let countNumberInputPassenger2 = document.getElementById('input-passenger2');
let countNumberInputPassenger3 = document.getElementById('input-passenger3');
let countNumberInputPassengerSell = document.getElementById('input-passenger-sell');

let totalPrice1 = document.getElementById('tour-booking-price1');
let totalPrice2 = document.getElementById('tour-booking-price2');
let totalPrice3 = document.getElementById('tour-booking-price3');
let totalPriceSell = document.getElementById('tour-booking-price-sell');
let totalBill = document.getElementById('thanh-tien');

let tongSoTienSauCung = 0;

// Hàm tính tổng và cập nhật giá trị hiển thị
const updatePrices = () => {
    const tongSoNguoi1 = parseInt(countNumberInputPassenger1.value) || 0;
    const tongSoNguoi2 = parseInt(countNumberInputPassenger2.value) || 0;
    const tongSoNguoi3 = parseInt(countNumberInputPassenger3.value) || 0;
    const tongSoNguoiSell = parseInt(countNumberInputPassengerSell.value) || 0;

    // Tính giá trị từng mục
    const bill1 = tongSoNguoi1 * giaBinhDan;
    const bill2 = tongSoNguoi2 * giaBinhDan;
    const bill3 = tongSoNguoi3 * giaBinhDan;
    const billSell = tongSoNguoiSell * giaSell;

    // Cập nhật tổng
    tongSoTienSauCung = bill1 + bill2 + bill3 + billSell;

    // Cập nhật giao diện
    totalPrice1.innerText = `${bill1.toLocaleString()}₫`;
    totalPrice2.innerText = `${bill2.toLocaleString()}₫`;
    totalPrice3.innerText = `${bill3.toLocaleString()}₫`;
    totalPriceSell.innerText = `${billSell.toLocaleString()}₫`;
    totalBill.innerText = `${tongSoTienSauCung.toLocaleString()}₫`;
};

// Gắn sự kiện `input` cho các input
countNumberInputPassenger1.addEventListener('input', updatePrices);
countNumberInputPassenger2.addEventListener('input', updatePrices);
countNumberInputPassenger3.addEventListener('input', updatePrices);
countNumberInputPassengerSell.addEventListener('input', updatePrices);

function toggleDropdown() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.classList.toggle('show');
}

// Close dropdown when clicking outside
document.addEventListener('click', (e) => {
    const dropdown = document.getElementById('userDropdown');
    const userInfo = document.querySelector('.user-info');

    if (!userInfo.contains(e.target)) {
        dropdown.classList.remove('show');
    }
});
