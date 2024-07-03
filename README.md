# Sports Booking Facility Management System

## Overview
This project is a comprehensive sports booking facility management system designed to streamline the process of booking sports facilities. It includes features for clients to book facilities and for administrators to manage bookings, payments, and user accounts.

## Features
- **Client Features:**
  - Browse available sports facilities.
  - Make and manage bookings.
  - Secure payment processing.

- **Administrator Features:**
  - Manage facility bookings.
  - Oversee user accounts and permissions.
  - Generate reports and analytics.

## Technology Stack
- **Backend:** PHP (Laravel)
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL
- **Tools:** Composer, PHPUnit, Git

## Installation

### Prerequisites
- PHP 7.4+
- Composer
- MySQL
- Git

### Steps
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/sports-booking-system.git
   cd sports-booking-system

2. Install Composer
    bash: composer install

3. Setup environment variables
    bash: cp .env.example .env

4. Generate application key
    bash: php artisan key:generate

5. Run migrations
    bash: php artisan migrate

6. Serve the application
    bash : php artisan serve

## Usage
### Client Access
1. Register an account or log in.
2. Browse available facilities.
3. Make a booking and proceed with the payment.
   
## Administrator Access
### Log in with admin credentials.
Manage bookings, users, and generate reports.

## Testing
### Unit Testing
To run unit tests:
bash : php artisan test

## Penetration Testing
Conduct penetration testing to identify and fix security vulnerabilities. Tools like OWASP ZAP and Burp Suite can be used.
Contributing
## Fork the repository.
1. Create a new branch for your feature or bugfix.
2. Commit your changes and push to your branch.
3. Create a pull request with a detailed description of your changes.

## Project Structure
VendorRyan
├─ CS1Repo
│  ├─ .editorconfig
│  ├─ .env
│  ├─ .env.example
│  ├─ app
│  │  ├─ Actions
│  │  │  ├─ Fortify
│  │  │  │  ├─ CreateNewUser.php
│  │  │  │  ├─ PasswordValidationRules.php
│  │  │  │  ├─ ResetUserPassword.php
│  │  │  │  ├─ UpdateUserPassword.php
│  │  │  │  └─ UpdateUserProfileInformation.php
│  │  │  └─ Jetstream
│  │  │     └─ DeleteUser.php
│  │  ├─ Http
│  │  │  └─ Controllers
│  │  │     ├─ ArenaController.php
│  │  │     ├─ Auth
│  │  │     │  ├─ ConfirmPasswordController.php
│  │  │     │  ├─ ForgotPasswordController.php
│  │  │     │  ├─ LoginController.php
│  │  │     │  ├─ RegisterController.php
│  │  │     │  ├─ ResetPasswordController.php
│  │  │     │  └─ VerificationController.php
│  │  │     ├─ Controller.php
│  │  │     ├─ HomeController.php
│  │  │     ├─ LockController.php
│  │  │     ├─ LogoffController.php
│  │  │     ├─ PaymentConttoller.php
│  │  │     ├─ ReservationController.php
│  │  │     └─ ReservedArenasController.php
│  │  ├─ Listeners
│  │  │  └─ LoginListener.php
│  │  ├─ Models
│  │  │  ├─ Arena.php
│  │  │  ├─ Payment.php
│  │  │  ├─ Reservation.php
│  │  │  ├─ ReservedArena.php
│  │  │  ├─ Role.php
│  │  │  └─ User.php
│  │  ├─ Providers
│  │  │  ├─ AppServiceProvider.php
│  │  │  ├─ FortifyServiceProvider.php
│  │  │  └─ JetstreamServiceProvider.php
│  │  └─ View
│  │     └─ Components
│  │        ├─ AppLayout.php
│  │        └─ GuestLayout.php
│  ├─ artisan
│  ├─ bootstrap
│  │  ├─ app.php
│  │  ├─ cache
│  │  │  ├─ packages.php
│  │  │  └─ services.php
│  │  └─ providers.php
│  ├─ composer.json
│  ├─ composer.lock
│  ├─ config
│  │  ├─ app.php
│  │  ├─ auth.php
│  │  ├─ cache.php
│  │  ├─ database.php
│  │  ├─ filesystems.php
│  │  ├─ fortify.php
│  │  ├─ jetstream.php
│  │  ├─ logging.php
│  │  ├─ mail.php
│  │  ├─ queue.php
│  │  ├─ sanctum.php
│  │  ├─ services.php
│  │  └─ session.php
│  ├─ database
│  │  ├─ database.sqlite
│  │  ├─ factories
│  │  │  └─ UserFactory.php
   
## License
This project is licensed under the MIT License. See the LICENSE file for details.

## Contact Us
For questions or feedback, please open an issue on the GitHub repository or contact us at [jaredmutua17@gmail.com] or [ryannduati8@gmail.com]



