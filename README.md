# Website Giới Thiệu Công Ty - Laravel

Website quảng cáo công ty được xây dựng bằng Laravel, dựa trên mẫu template chuyên nghiệp với giao diện hiện đại và responsive.

## Tính năng

- ✅ Trang chủ với Hero Section đẹp mắt
- ✅ Section Case Studies (Portfolio)
- ✅ Statistics Banner với animation
- ✅ Blog Section
- ✅ Trang About Us
- ✅ Trang Products
- ✅ Trang Services
- ✅ Trang Portfolios
- ✅ Trang Contact với form liên hệ
- ✅ Footer đầy đủ thông tin
- ✅ Responsive design cho mobile và tablet
- ✅ Navigation menu với mobile menu

## Yêu cầu hệ thống

- PHP >= 8.1
- Composer
- Node.js và NPM (cho Vite)
- XAMPP hoặc bất kỳ web server nào hỗ trợ PHP

## Cài đặt

### 1. Cài đặt dependencies

```bash
# Cài đặt PHP dependencies
composer install

# Cài đặt Node dependencies
npm install
```

### 2. Cấu hình môi trường

Tạo file `.env` từ `.env.example` (nếu chưa có):

```bash
cp .env.example .env
```

Hoặc tạo file `.env` mới với nội dung cơ bản:

```env
APP_NAME="Website Gioi Thieu"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=web_gioithieu
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Tạo Application Key

```bash
php artisan key:generate
```

### 4. Build assets

```bash
# Development mode
npm run dev

# Production mode
npm run build
```

### 5. Chạy server

```bash
php artisan serve
```

Truy cập: `http://localhost:8000`

## Cấu trúc dự án

```
web-gioithieu/
├── app/                    # Application logic
├── bootstrap/              # Bootstrap files
├── config/                 # Configuration files
├── database/               # Database migrations, seeders
├── public/                 # Public assets
├── resources/
│   ├── css/
│   │   └── app.css        # Main stylesheet
│   ├── js/
│   │   └── app.js         # Main JavaScript
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php    # Main layout
│       ├── partials/
│       │   ├── header.blade.php  # Header partial
│       │   └── footer.blade.php  # Footer partial
│       ├── home.blade.php        # Home page
│       ├── about.blade.php       # About page
│       ├── products.blade.php    # Products page
│       ├── blogs.blade.php       # Blogs page
│       ├── services.blade.php    # Services page
│       ├── portfolios.blade.php # Portfolios page
│       └── contact.blade.php     # Contact page
├── routes/
│   └── web.php            # Web routes
└── vite.config.js         # Vite configuration
```

## Routes

- `/` - Trang chủ
- `/about` - Giới thiệu
- `/products` - Sản phẩm
- `/blogs` - Blog
- `/services` - Dịch vụ
- `/portfolios` - Portfolio/Case Studies
- `/contact` - Liên hệ

## Tùy chỉnh

### Thay đổi màu sắc

Chỉnh sửa file `resources/css/app.css`, tìm biến CSS:

```css
:root {
    --primary-color: #ff6b35;  /* Màu chính */
    --dark-bg: #2c2c2c;         /* Màu nền tối */
    /* ... */
}
```

### Thay đổi nội dung

- Header/Footer: `resources/views/partials/header.blade.php` và `footer.blade.php`
- Trang chủ: `resources/views/home.blade.php`
- Các trang khác: `resources/views/[tên-trang].blade.php`

### Thay đổi hình ảnh

Thay thế các URL hình ảnh trong các file blade bằng hình ảnh của bạn. Hiện tại đang sử dụng Unsplash placeholder images.

## Lưu ý

- Đảm bảo quyền ghi cho thư mục `storage/` và `bootstrap/cache/`
- Nếu sử dụng XAMPP, đặt project trong thư mục `htdocs` và truy cập qua `http://localhost/web-gioithieu/public`

## Hỗ trợ

Nếu gặp vấn đề, vui lòng kiểm tra:
1. PHP version >= 8.1
2. Composer đã được cài đặt
3. Node.js và NPM đã được cài đặt
4. File `.env` đã được tạo và cấu hình đúng

## License

MIT License






