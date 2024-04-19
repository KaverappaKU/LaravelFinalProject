# Game Catalog

Welcome to the Game Catalog! This repository contains a web application for managing and exploring various games. Users can browse through a list of games, view details such as the game name, developer, genre, and release date, and utilize authentication to access their personalized dashboard.

## Features

- **Game Listings:** Explore a comprehensive list of games with details including the game name, developer, genre, and release date.
- **User Authentication:** Securely log in to the application to access personalized features.
- **Dashboard:** Upon authentication, users are provided with a dashboard where they can view the games.

## Technologies Used

- Backend:
  - PHP (Laravel Framework)
  - MySQL

- Frontend:
  - Blade Templates

## Installation

1. Clone the repository:

   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:

   ```
   cd game-catalog
   ```

3. Install PHP dependencies:

   ```
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration in the `.env` file according to your environment.

5. Generate an application key:

   ```
   php artisan key:generate
   ```

6. Run the database migrations and seed the database with sample data:

   ```
   php artisan migrate --seed
   ```

7. Start the development server:

   ```
   php artisan serve
   ```

## Usage

- Browse through the list of games on the homepage.
- Log in or sign up to access personalized features.
