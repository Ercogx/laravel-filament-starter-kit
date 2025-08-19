# 🚀 Glow Starter Kit

This is a **Filament v4 Starter Kit** for **Laravel 12**, designed to accelerate the development of Filament-powered applications.

Preview:
![](https://raw.githubusercontent.com/ercogx/laravel-filament-starter-kit/main/preview-white.png)
Dark Mode:
![](https://raw.githubusercontent.com/ercogx/laravel-filament-starter-kit/main/preview.png)

## Compatibility

| Starter Kit                                                            | Filament Version                                        |
|------------------------------------------------------------------------|---------------------------------------------------------|
| [1.x](https://github.com/Ercogx/laravel-filament-starter-kit/tree/1.x) | [3.x](https://github.com/filamentphp/filament/tree/3.x) |
| **2.x**                                                                | **4.x**                                                 |


## 📦 Installation

You need the Laravel Installer if it is not yet installed.

```bash
composer global require laravel/installer
```

Now you can create a new project using the Laravel Filament Starter Kit.

```bash
laravel new test-kit --using=ercogx/laravel-filament-starter-kit
```

> If you want a Filament v3 (not recommended) ```laravel new test-kit --using=ercogx/laravel-filament-starter-kit:1.8.0```

## ⚙️ Setup

1️⃣ **Database Configuration**

By default, this starter kit uses **SQLite**. If you’re okay with this, you can skip this step. If you prefer **MySQL**, follow these steps:

- Update your database credentials in `.env`
- Run migrations: `php artisan migrate`
- (Optional) delete the existing database file: ```rm database/database.sqlite```

2️⃣ Create Filament Admin User
```bash
php artisan make:filament-user
```

3️⃣ Assign Super Admin Role
```bash
php artisan shield:super-admin --user=1 --panel=admin
```

4️⃣ Generate Permissions
```bash
php artisan shield:generate --all --ignore-existing-policies --panel=admin
```

## 🌟Panel Include 

- [Shield](https://filamentphp.com/plugins/bezhansalleh-shield) Access management to your Filament Panel's Resources, Pages & Widgets through spatie/laravel-permission.
- [Backgrounds](https://filamentphp.com/plugins/swisnl-backgrounds) Beautiful backgrounds for Filament auth pages.
- [Logger](https://filamentphp.com/plugins/z3d0x-logger) Extensible activity logger for filament that works out-of-the-box.

> More will be added when the relevant plugins release support for v4

## 🧑‍💻Development Include

- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) The most popular debugging tool for Laravel, providing detailed request and query insights.
- [larastan/larastan](https://github.com/larastan/larastan) A PHPStan extension for Laravel, configured at level 5 for robust static code analysis.

The `composer check` script runs **tests, PHPStan, and Pint** for code quality assurance:
```bash
composer check
```

## 📜 License

This project is open-source and licensed under the MIT License.

## 💡 Contributing

We welcome contributions! Feel free to open issues, submit PRs, or suggest improvements.


### 🚀 Happy Coding with Laravel & Filament! 🎉
