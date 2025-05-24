# Agrilink Website

## Overview
The Agrilink website is a platform designed to connect farmers with consumers, providing a marketplace for agricultural products. The website includes features for user registration, login, and dashboards for both farmers and administrators.

## Features
- **User Registration**: New users can create an account to access the marketplace.
- **User Login**: Registered users can log in to their accounts.
- **Marketplace**: Users can browse and purchase products listed by farmers.
- **Admin Dashboard**: Administrators can manage users, products, and orders.
- **Farmer Dashboard**: Farmers can manage their products and view orders.

## Project Structure
```
agrilink-website
├── public
│   ├── index.php
│   ├── login.php
│   ├── register.php
│   ├── marketplace.php
│   ├── admin_dashboard.php
│   ├── farmer_dashboard.php
│   ├── logout.php
│   ├── assets
│   │   ├── css
│   │   │   └── styles.css
│   │   └── js
│   │       └── scripts.js
├── src
│   ├── db
│   │   └── db_connection.php
│   ├── controllers
│   │   ├── AuthController.php
│   │   ├── MarketplaceController.php
│   │   ├── AdminController.php
│   │   └── FarmerController.php
│   ├── models
│   │   ├── User.php
│   │   ├── Product.php
│   │   ├── Order.php
│   │   └── Farmer.php
│   └── views
│       ├── partials
│       │   ├── header.php
│       │   └── footer.php
│       └── templates
│           ├── login_form.php
│           ├── register_form.php
│           ├── marketplace_list.php
│           ├── admin_dashboard_content.php
│           └── farmer_dashboard_content.php
├── config
│   └── config.php
├── .gitignore
└── README.md
```

## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Set up a MySQL database and import the SQL dump provided in the `agrilink.sql` file.
4. Update the database connection settings in `src/db/db_connection.php`.
5. Open the project in a web server environment (e.g., XAMPP, WAMP).
6. Access the website through your browser at `http://localhost/agrilink-website/public/index.php`.

## Technologies Used
- HTML
- PHP
- MySQL
- Bootstrap
- JavaScript

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License.