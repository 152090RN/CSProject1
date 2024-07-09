# Sports Booking Facility Management System

## Overview
This project is a comprehensive sports booking facility management system designed to streamline the process of booking sports facilities. It includes features for clients to book facilities and for administrators to manage bookings, payments, and user accounts.

## Project Title and Description
### Title:
Sports Booking Facility Management System

### Description:
This system provides a platform for users to browse and book sports facilities while allowing administrators to manage these bookings, handle payments, and oversee user accounts. It aims to simplify the process of managing sports facility reservations and improve user experience.

## Project Setup/Installation Instructions
### Dependencies:
- PHP 7.4+
- Composer
- MySQL
- Git

### Installation Steps:
1. **Clone the repository:**
   ```bash
   https://github.com/152090RN/CSProject1.git
   ```

2. **Install Composer:**
   ```bash
   composer install
   ```

3. **Setup environment variables:**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations:**
   ```bash
   php artisan migrate
   ```

6. **Serve the application:**
   ```bash
   php artisan serve
   ```

## Usage Instructions
### How to Run:
1. **Client Access:**
   - Register an account or log in.
   - Browse available facilities.
   - Make a booking and proceed with the payment.

2. **Administrator Access:**
   - Log in with admin credentials.
   - Manage bookings, users, and generate reports.

### Examples:
- **Booking a Facility:**
   - Log in as a user.
   - Navigate to the facilities page.
   - Select a facility and choose a date/time.
   - Confirm the booking and complete the payment process.

### Input/Output:
- **Input:**
  - User registration details (e.g., name, email, password)
  - Booking details (e.g., facility, date, time)
  - Payment information

- **Output:**
  - Confirmation of bookings
  - Payment receipts
  - Reports for administrators

## Project Structure
### Overview:
The project is organized into several key directories, each serving a specific purpose. Below is a brief description of the main folders and their contents.

### Key Files:
```
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
```



### Acknowledgements:
- Credit to Laravel for the framework.
- Thanks to the authors of any tutorials or libraries used.

### License:
This project is licensed under the MIT License. See the LICENSE file for details.

### Contact Information:
For questions or feedback, please open an issue on the GitHub repository or contact us at:
- [jaredmutua17@gmail.com](mailto:jaredmutua17@gmail.com)
- [ryannduati8@gmail.com](mailto:ryannduati8@gmail.com)
