<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
      <form action="" method="post" id="f-register">
        <div class="header">
          <h2>Đăng ký</h2>
        </div>
        <div class="f-input">
          <div class="label">
            <label for="username">Tên người dùng:</label>
          </div>
          <input type="text" placeholder="Nhập tên của bạn vào đây(VD: diep123, hoangdz,..)" name="username" id="username" style="font-size: large;">
        </div>
        <div class="f-input">
          <div class="label">
            <label for="email">Email:</label>
          </div>
          <input type="email" placeholder="Điền Email của bạn..." name="email" id="email">
        </div>
        <div class="f-input">
          <div class="label">
            <label for="password">Mật khẩu:</label>
          </div>
          <input type="password" placeholder="Nhập mật khẩu..." name="password" id="password">
        </div>

        <div class="f-checkbox">
            <input type="checkbox" name="agree-term" style="margin: 10px;">
            <span>Tôi đồng ý với điều khoản</span>
            <br>
            <input type="checkbox" name="newsletter" style="margin: 10px;">
            <span>Nhận tất cả thông báo từ Web</span>
        </div>

        <div class="button-register">
            <div class="accept-submit">
              <span>Đã có tài khoản?</span> <a href="login.html" style="text-decoration: none; color: cornflowerblue;">Đăng nhập</a>
            </div>
            <div class="accept-submit">
              <button id="btn-submit" type="submit">Đăng ký</button>
            </div>
        </div>
      </form>
    </div>
</body>
</html>