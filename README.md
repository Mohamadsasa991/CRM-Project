# 🧭 Laravel CRM System

A **Customer Relationship Management (CRM)** system built with **Laravel**.  
This project allows you to manage clients, tasks, and users efficiently.

---

## 🚀 Features
- Registeration and Login System
- 👥 Manage Clients (Create, Edit, Delete, View)
- 👥 Manage Users (Create, Edit, Delete, View)   
- 👥 Manage Tasks (Create, Edit, Delete, View)   
- 👥 Manage Projects (Create, Edit, Delete, View)   
- 📋 Task Management and Assignment  
- 🔑 Role-Based Access Control (Roles & Permissions using Spatie package)  
---

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| Laravel 11 | Framework |
| PHP 8.2+  | Backend language |
| MySQL      | Database |
| Composer   | Dependency management |
| Bootstrap 5 | Frontend UI |
| Blade Templates | View rendering |
| Spatie package  | Access control |

---

## ⚙️ Installation & Setup

```bash
# 1️⃣ Clone the repository
git clone https://github.com/yourusername/laravel-crm.git

# 2️⃣ Navigate into the project folder
cd laravel-crm

# 3️⃣ Install dependencies
composer install
npm install && npm run dev

# 4️⃣ Copy example environment file
cp .env.example .env

# 5️⃣ Generate application key
php artisan key:generate

# 6️⃣ Update your database credentials in `.env`
# DB_DATABASE=your_database_name
# DB_USERNAME=your_db_user
# DB_PASSWORD=your_db_password

# 7️⃣ Run migrations and seeders
php artisan migrate --seed

# 8️⃣ Start local development server
php artisan serve


--------------------------------------------------------

🧑‍💻 Developer

Mohamad Alsasa
Back-End Developer
📧 [Mohamadalsasa991@gmail.com](mailto:Mohamadalsasa991@gmail.com)  
💼 [LinkedIn Profile](https://www.linkedin.com/in/mohamad-sasa-22011b250/)
