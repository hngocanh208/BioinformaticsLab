# BioLab Showcase 🧬

Welcome to the **BioinformaticsLab** showcase web application! This project serves as the digital front door for our research team, built specifically to highlight our laboratory's members, projects, technical expertise, and latest news. 


![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=FFD62E)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

---

##  Key Features

*   **Responsive Modern UI**: Pixel-perfect implementation of the lab's design system using Tailwind CSS.
*   ** Dark/Light Mode**: User preference seamlessly integrated using local storage and Tailwind's class strategy.
*   ** Multi-Language Support**: Fully localized in English (EN) and Vietnamese (VI) using Laravel's session-based localization system.
*   ** Search Functionality**: Integrated quick search targeting mocked lab projects and news articles.
*   ** Blazing Fast Assets**: Frontend assets compiled and optimized on the fly using Vite.

##  Technology Stack

*   **Framework**: Laravel 10.x (PHP >= 8.1)
*   **Styling**: Tailwind CSS & Vanilla CSS
*   **Asset Bundler**: Vite
*   **Icons & Fonts**: Material Icons & Google Fonts (Roboto)
*   **Deployment Environment**: Railway (Nixpacks)

---

##  Getting Started (Local Development)

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites

Ensure you have the following installed:
*   [PHP](https://www.php.net/downloads) (>= 8.1.0)
*   [Composer](https://getcomposer.org/download/)
*   [Node.js](https://nodejs.org/) & NPM

### Installation

1.  **Clone the repository**
    ```bash
    git clone https://github.com/hngocanh208/BioinformaticsLab.git
    cd BioinformaticsLab
    ```

2.  **Install PHP dependencies**
    ```bash
    composer install
    ```

3.  **Install Node.js dependencies**
    ```bash
    npm install
    ```

4.  **Environment Setup**
    Duplicate the `.env.example` file and rename it to `.env`.
    ```bash
    cp .env.example .env
    ```

5.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

6.  **Compile Frontend Assets**
    ```bash
    # For local server hot-reloading:
    npm run dev
    
    # Or to compile for production:
    npm run build
    ```

7.  **Run the Local Development Server**
    ```bash
    php artisan serve
    ```
    The application will be accessible at `http://localhost:8000`.

---

