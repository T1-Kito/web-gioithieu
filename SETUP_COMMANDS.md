# Các lệnh đã chạy để setup project

## ✅ Đã hoàn thành:

1. **Tạo file .env** - Đã tạo file .env với cấu hình cơ bản
2. **Composer install** - Đã cài đặt tất cả PHP dependencies
3. **NPM install** - Đã cài đặt tất cả Node dependencies  
4. **NPM build** - Đã build assets thành công
5. **Tạo các file Laravel cần thiết**:
   - artisan
   - bootstrap/app.php
   - app/Http/Kernel.php
   - app/Console/Kernel.php
   - app/Exceptions/Handler.php
   - Các middleware files
   - app/Providers/RouteServiceProvider.php

## ⚠️ Cần chạy thêm:

### 1. Tạo Application Key:
```bash
cd c:\xampp\web-gioithieu
php artisan key:generate
```

### 2. Tạo file config/app.php (nếu chưa có):
Bạn có thể copy từ một Laravel project khác hoặc chạy:
```bash
php artisan vendor:publish --tag=config
```

### 3. Chạy development server:
```bash
# Option 1: Dùng Laravel serve
php artisan serve

# Option 2: Dùng XAMPP
# Đặt project trong htdocs và truy cập:
# http://localhost/web-gioithieu/public
```

### 4. Build assets (nếu chưa build):
```bash
npm run build
# hoặc cho development:
npm run dev
```

## 📝 Lưu ý:

- File .env đã được tạo nhưng có thể cần chỉnh sửa APP_KEY
- Nếu thiếu file config, bạn có thể tạo Laravel project mới và copy thư mục config
- Đảm bảo các thư mục storage/ và bootstrap/cache/ có quyền ghi

## 🚀 Truy cập website:

Sau khi chạy `php artisan serve`, truy cập:
- http://localhost:8000






