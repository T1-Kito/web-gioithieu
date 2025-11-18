# Hướng dẫn Deploy Website lên Vinahost

## Bước 1: Chuẩn bị trước khi upload

### 1.1. Build assets (đã làm rồi)
```bash
npm run build
```
File đã được build trong `public/build/`

### 1.2. Tạo file .env.example (nếu chưa có)
Tạo file `.env.example` với cấu hình cơ bản để tham khảo.

## Bước 2: Upload files lên Vinahost

### 2.1. Files cần upload:
- ✅ Tất cả files trong project
- ❌ KHÔNG upload: `node_modules/`, `.git/`, `.env` (sẽ tạo mới trên server)

### 2.2. Cách upload:
1. Đăng nhập vào **File Manager** của Vinahost (cPanel hoặc DirectAdmin)
2. Vào thư mục `public_html` hoặc `www` (tùy cấu hình)
3. Upload tất cả files qua **File Manager** hoặc **FTP**

## Bước 3: Cấu hình trên Server

### 3.1. Tạo file .env
Trên server, tạo file `.env` với nội dung:

```env
APP_NAME="Vigilance Vietnam"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_TIMEZONE=Asia/Ho_Chi_Minh
APP_URL=http://yourdomain.com

APP_LOCALE=vi
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=vi_VN

APP_MAINTENANCE_DRIVER=file

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"
```

### 3.2. Cài đặt dependencies

**SSH vào server** (nếu có quyền SSH) hoặc dùng **Terminal** trong cPanel:

```bash
# Cài đặt Composer dependencies (production)
composer install --no-dev --optimize-autoloader

# Hoặc nếu không có SSH, upload thư mục vendor đã build sẵn từ local
```

**Lưu ý:** Nếu không có SSH, bạn cần:
- Chạy `composer install --no-dev` trên máy local
- Upload thư mục `vendor/` lên server

### 3.3. Generate Application Key
```bash
php artisan key:generate
```

### 3.4. Chạy migrations
```bash
php artisan migrate --force
```

### 3.5. Tạo storage link
```bash
php artisan storage:link
```

### 3.6. Set permissions
```bash
chmod -R 755 storage bootstrap/cache
chmod -R 755 public
```

## Bước 4: Cấu hình Web Server

### 4.1. Cấu hình Document Root
- **Document Root** phải trỏ đến thư mục `public/` của Laravel
- Ví dụ: `/home/username/public_html/public` hoặc `/home/username/public_html/web-gioithieu/public`

### 4.2. Tạo file .htaccess (nếu chưa có)
Trong thư mục `public/`, đảm bảo có file `.htaccess`:

```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

## Bước 5: Kiểm tra

1. Truy cập website: `http://yourdomain.com`
2. Kiểm tra xem có lỗi không
3. Test các chức năng: navigation, images, forms

## Bước 6: Tối ưu Performance (Optional)

```bash
# Cache config
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

## Lưu ý quan trọng:

1. **Database:** Đảm bảo đã tạo database trên Vinahost và cập nhật thông tin trong `.env`
2. **PHP Version:** Vinahost cần PHP >= 8.2
3. **Extensions:** Cần các PHP extensions: mbstring, openssl, pdo, pdo_mysql, tokenizer, xml, ctype, json
4. **Storage:** Đảm bảo thư mục `storage/` và `bootstrap/cache/` có quyền ghi
5. **SSL:** Nên cài SSL certificate (Let's Encrypt) cho domain

## Nếu gặp lỗi:

1. **500 Error:** Kiểm tra file `.env`, permissions, và logs trong `storage/logs/`
2. **404 Error:** Kiểm tra Document Root và `.htaccess`
3. **Database Error:** Kiểm tra thông tin database trong `.env`
4. **Assets không load:** Kiểm tra `public/build/` đã được upload chưa

## Checklist trước khi deploy:

- [ ] Đã build assets: `npm run build`
- [ ] Đã chuẩn bị file `.env` với thông tin database
- [ ] Đã upload tất cả files (trừ node_modules, .git)
- [ ] Đã cài đặt Composer dependencies
- [ ] Đã generate APP_KEY
- [ ] Đã chạy migrations
- [ ] Đã tạo storage link
- [ ] Đã set permissions
- [ ] Đã cấu hình Document Root
- [ ] Đã test website

