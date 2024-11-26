<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./assets/css/admin.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar_user_info">Ten Admin</div>
            <div class="sidebar_total_income">Tong Thu Nhap</div>
            <div class="sidebar_evaluate">Danh gia</div>
        </div>
        <div class="info-detail">
            <div class="topnav">
                <div class="right-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M236-345 100-480l440-440h271L236-345ZM540-40 303-277l237-237h271L574-277 811-40H540Z"/>
                    </svg>
                </div>
                <div class="left-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/>
                    </svg>
                </div>
            </div>
            <div class="edit-product">
            <div id="product_title">
                <h1>Tong San Pham</h1>
                <button class="add_product_btn">Them San Pham</button>
            </div>
                <table>
                    <thead>
                        <tr>
                            <td scope="col">Ten Khach San</td>
                            <td scope="col">Tieu De Khach San</td>
                            <td scope="col">Gia Thue</td>
                            <td scope="col">Chuc Nang</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Khach San Hoang Mai
                            </td>
                            <td>
                                Khach San 5 * Chat Luong Tot nhat chau au
                            </td>
                            <td>
                                5.000.000 d
                            </td>
                            <td class="tb_funct">
                                <button>
                                    Sua San Pham
                                </button> |
                                <button>
                                    Xoa San Pham
                                </button> |
                                <button>
                                    Thong tin chi tiet
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>