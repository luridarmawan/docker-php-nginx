# 🐳 Docker Image for Nginx and PHP 8.2 with Composer & Extensions

A custom Docker image combining **PHP 8.2-FPM** and **Nginx**, optimized for modern PHP development environments with essential extensions and Composer support built-in.

📦 **Base Image:** `php:8.2-fpm`  
📁 **Source Code:** [GitHub Repository](https://github.com/luridarmawan/docker-php-nginx)

---

## ✅ Features

- Based on `php:8.2-fpm`
- Nginx pre-installed and configured
- Composer included (via `composer:2`)
- PHP extensions included:
  - `pdo`, `pdo_mysql`, `mysqli`
  - `gd` (with freetype and jpeg)
  - `imagick` (via PECL)
- Lightweight and production-ready
- Includes default `index.php` and `info.php`

---

## 🏗 Build Instructions

**Standard build:**
```bash
docker build -t luri/php-nginx .
```

**Multi-architecture build:**
```bash
docker buildx build --platform linux/amd64,linux/arm64 -t luri/php-nginx:multiarch .
```

---

## 🚀 Usage

```bash
docker run -d -p 8080:8080 luri/php-nginx
```

Then open: [http://localhost:8080](http://localhost:8080)

Running to shell:

```bash
 docker run -it --rm --name nginx luri/php-nginx bash
```

Running with docker compose:

```bash
 docker compose up
```

---

## 📁 Included Files

- `files/nginx/default.conf` – Preconfigured Nginx virtual host
- `files/index.php` – Welcome page
- `files/info.php` – PHP info page

---

## ⚙️ Configuration Notes

- Default Nginx config listens on port `8080`
- PHP-FPM runs as a background process, with Nginx in the foreground
- Working directory is set to `/app`

---

## 📌 Info

- Default exposed port: `8080`
- Platforms supported: `amd64`, `arm64`
- Ideal for both local development and lightweight deployments

---

Fork and customize this image at GitHub. PRs welcome!
