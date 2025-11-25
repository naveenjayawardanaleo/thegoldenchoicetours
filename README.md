The Golden Choice Tours

The Golden Choice Tours - a full-featured, production-ready CMS for a tour company built with Laravel and a custom frontend converted from Figma → HTML/CSS/JS using Bootstrap.

Fully completed CMS: tour management, bookings, admin panel, content pages, and responsive UI.

🚀 Features

Admin CMS for managing tours, bookings, destinations, prices, images, and content

Public-facing frontend (landing pages, tour details, booking flow)

Authentication & role-based admin access

CRUD for tours, categories, testimonials, FAQs, galleries

Booking confirmation emails (configurable SMTP)

Image uploads & responsive asset handling

SEO-friendly routes and metadata

Built with Bootstrap for mobile-first responsive layout

Frontend hand-converted from Figma to HTML/CSS/JS

🛠 Tech Stack

Backend: PHP, Laravel (8/9/10+)

Frontend: HTML5, CSS3, JavaScript

Styling / UI: Bootstrap (customized from Figma)

Database: MySQL (or MariaDB)

Task runner: npm / Laravel Mix (or Vite)

📁 Project Structure (high level) /app /bootstrap /config /database /public /assets /css /js /images /resources /views # blade templates (frontend + admin) /sass / js # source styles & scripts (if using Mix/Vite) routes .env.example

▶️ Quick Start (copy & paste)

Clone repo

git clone https://github.com/yourusername/thegoldenchoicetours.git cd thegoldenchoicetours

Install PHP dependencies

composer install

Install frontend dependencies

npm install npm run dev # or npm run build for production

Copy .env and set keys

cp .env.example .env php artisan key:generate

then edit .env to set DB, MAIL, APP_URL, etc.
Database setup

php artisan migrate php artisan db:seed # optional seeders (tours, admin user)

Storage link (for images)

php artisan storage:link

Run app locally

php artisan serve open http://127.0.0.1:8000

🔧 Environment variables to configure

Edit .env for:

DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD

MAIL_MAILER, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_FROM_ADDRESS

APP_URL

Optional: REDIS_HOST, QUEUE_CONNECTION

✅ Admin / Demo Data

After running seeders, check database/seeders for demo admin credentials or create an admin user:

php artisan tinker

\App\Models\User::factory()->create(['email' => 'admin@example.com', 'is_admin' => true]);

📸 UI & Assets

All public UI pages were designed in Figma and converted to clean Bootstrap-based HTML/CSS/JS.

Source Figma designs (exported assets) placed under /public/assets/images and SCSS/JS source in /resources.

♻️ Deployment notes

Build frontend assets for production: npm run build

Use php artisan config:cache and php artisan route:cache on production

Set proper file permissions for storage and bootstrap/cache

Use a process manager (supervisor) for queues and workers, and schedule cron for php artisan schedule:run

🤝 Contributing

PRs welcome. Please follow these steps:

Fork the repo

Create a feature branch

Add tests / describe changes in the PR

Submit PR for review

📝 License

MIT License — see LICENSE file.

Contact / Support

For questions or help setting up, open an issue or contact the maintainer: naveenjayawardanaleo@gmail.com
