![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-35-51.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-37-26.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-37-39.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-38-08.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-38-46.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-38-55.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-39-12.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-39-26.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-40-09.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-40-30.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-40-40.png)
![Screenshot](screenshotOfApp/Screenshot from 2024-09-27 18-41-41.png)


# Support Ticket Management System

This project is a Support Ticket System built with Laravel. It allows customers to submit issues by creating tickets and enables admins to manage and respond to them.

## Table of Contents

- [Features](#features)
- [Technologies](#technologies)
- [Getting Started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Application](#running-the-application)


## Features

- Customer can submit a support ticket.
- Admin is notified via email when a ticket is submitted.
- Admin can respond to customer tickets.
- Customer receives email notifications when the admin responds or closes the ticket.
- Basic user roles: Admin and Customer.

## Technologies

- Laravel (PHP Framework)
- MySQL (Database)
- HTML, CSS, Bootstrap (Frontend)
- Git for version control

## Getting Started

To get a local copy of the project up and running, follow these steps.

### Prerequisites

Make sure you have the following tools installed:

- PHP
- Composer
- Node.js & npm
- MySQL
- Git

### Installation

1. **Clone the repository:**

   git clone......


2. Navigate to the project directory:

   cd support-ticket-coding-test

3. Install PHP dependencies:

composer install

4. Install Node.js dependencies:

npm install

5. Copy the .env file:
cp .env.example .env

6. Update the environment variables:

Open the .env file and set the database and mail configuration.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=support_ticket
DB_USERNAME=root
DB_PASSWORD=yourpassword

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=9856fgfg4545
MAIL_PASSWORD=f86fgfgfgfg45645
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="rifathasan20115@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"




7. Generate the application key:

php artisan key:generate

8. Run database migrations:

    php artisan migrate

9. Running the Application with 

    Start the development server:

php artisan serve


10. Open the application:

Access the application in your browser at http://127.0.0.1:8000.