# Local Flower Hub

## Table of Contents

- [Introduction](#local-flower-hub)
- [Features](#features)
- [How it Works](#how-it-works)
- [Installation](#installation)

<strong>Local Flower Hub</strong> unites customer with flower shops and suppliers.

## Features

- **Customer Orders:** Allow customers to easily place orders for flowers from nearby shops.
- **Supplier Updates:** Suppliers can update the availability of flowers and fulfill customer orders accordingly.
- **Flower Shop Storage:** Flower shops can function as storage for customer orders.
- **Rating System:** Customers can rate both the shop and supplier after purchase for feedback.

## How it Works

1. **Customer Order Placement:**
   - Customers browse available flowers and place orders from nearby shops.

2. **Supplier Updates:**
   - Suppliers update the availability of flowers and fulfill customer orders accordingly.

3. **Flower Shop Storage:**
   - Flower shops receive and store customer orders.

4. **Rating System:**
   - After purchase, customers can provide feedback by rating both the shop and supplier.

## Installation

### Prerequisites
Before you begin, ensure that you have Docker installed on your system. For more information on the usage of Laravel Sail, refer to the [Laravel Sail Documentation](https://laravel.com/docs/10.x/sail#introduction).

### Clone the Repository

1. Clone the repository: `git clone https://github.com/MarisSuss/local-flower-hub`
2. Navigate to the project directory: `cd local-flower-hub`
3. Start Laravel Sail: `./vendor/bin/sail up`
4. Access the Laravel Sail shell: `./vendor/bin/sail shell`
5. Install dependencies: `composer install`
6. Configure the necessary settings (database connection, API keys, etc.) in the .env file.

### Stop Laravel Sail

- When you're done, stop Laravel Sail by running: `./vendor/bin/sail down`