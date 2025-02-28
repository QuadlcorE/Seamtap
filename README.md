# Seamtap: Measurement Management System for Fashion Designers

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

## Project Overview

Seamtap is a web application designed to streamline measurement management for fashion designers. It replaces traditional paper-based methods with a digital solution, allowing designers to efficiently store, retrieve, and manage customer measurement data.

This application provides:

* **User Registration and Account Types:**
    * Family Accounts: For managing measurements of multiple individuals under a single family profile.
    * Individual Accounts: For storing measurements of single customers.
* **Secure Measurement Storage and Retrieval:** Easy access to customer measurement data anytime, anywhere.
* **Data Security and Accessibility:** Secure storage with authentication, accessible across multiple devices.
* **User-Friendly Interface:** An intuitive design for seamless data entry and retrieval.

## Technologies Used

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL (using XAMPP)

## Getting Started

These instructions will guide you on how to set up and run Seamtap on your local machine using XAMPP.

### Prerequisites

* XAMPP installed on your local machine (Apache, MySQL, PHP).
* Git installed on your local machine.
* A web browser (Chrome, Firefox, etc.).

### Installation

1.  **Clone the Repository:**
    * Open your terminal or command prompt.
    * Navigate to the directory where you want to clone the project.
    * Run the following command:
        ```bash
        git clone [https://github.com/QuadlcorE/Seamtap.git](https://www.google.com/search?q=https://github.com/QuadlcorE/Seamtap.git)
        ```
2.  **Move the Project to XAMPP's `htdocs` Directory:**
    * Copy the `Seamtap` folder to your XAMPP `htdocs` directory (e.g., `C:\xampp\htdocs\` on Windows or `/opt/lampp/htdocs/` on Linux).
3.  **Start XAMPP:**
    * Open the XAMPP Control Panel.
    * Start the Apache and MySQL services.
4.  **Create the Database:**
    * Open your web browser and go to `http://localhost/phpmyadmin`.
    * Create a new database (e.g., `seamtap_db`).
    * **Import the Database Schema:**
        * Navigate to the repository folder on your local machine.
        * Find the sql file that contains the database structure. Import that file into your newly created database via phpmyadmin.
5.  **Configure Database Connection:**
    * Navigate to the project directory in your `htdocs` folder.
    * Locate the PHP file(s) that handle database connections (e.g., `config.php`, `db_connect.php`).
    * Update the database connection details (hostname, database name, username, password) to match your XAMPP MySQL configuration.
        * Most likely the default XAMPP username is root, and the default password is blank.
6.  **Access the Application:**
    * Open your web browser and go to `http://localhost/Seamtap`.

### Usage

* Register a new account or log in with existing credentials.
* Create family or individual customer profiles.
* Add and manage customer measurement data.
* Retrieve and view measurement information.

### Contributing

Contributions are welcome! If you find any bugs or have suggestions for improvements, please open an issue or submit a pull request.

### License

This project is licensed under the MIT License - see the `LICENSE` file for details.

### Important Notes for XAMPP Users

* Ensure that your XAMPP Apache and MySQL services are running before accessing the application.
* Double-check your database connection details in the PHP configuration files.
* If you encounter any database related errors, double check that your database import was successful.
* If you have any issues with file permissions, ensure that the apache user has the correct permissions to write to the project directory.
