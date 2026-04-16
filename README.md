:rocket: Community Discussion Platform
A robust, community-driven Q&A platform built with Core PHP. This application allows users to engage in knowledge sharing through a structured discussion environment, similar to platforms like Stack Overflow or Quora.
:star2: Key Features

User Engagement: Post new questions and contribute insightful answers to existing discussions.
Explore & Discover: Easily browse through a centralized feed of community-driven content.
Dynamic Interaction: Real-time-like feel for managing discussions and community inputs.
Clean Architecture: Built using Core PHP to demonstrate a strong grasp of server-side logic and database management without relying on heavy frameworks.
:hammer_and_wrench: Tech Stack

Backend: PHP (81.5%), Hack (13.2%)
Frontend: CSS3 (5.3%), HTML5
Database: MySQL (Relational data mapping for Users, Questions, and Answers)
:open_file_folder: Project Structure
Plaintext



├── core/               # Business logic and database connections
├── assets/             # CSS, JS, and image files
├── includes/           # Reusable components (headers, footers)
├── sql/                # Database schema and migrations
└── index.php           # Main entry point:rocket: Getting Started
Follow these steps to get the project up and running on your local machine:
Prerequisites

PHP >= 7.4
MySQL/MariaDB
A local server environment (XAMPP, WAMP, or Laragon)
Installation
1. Clone the repository:
Bash



git clone https://github.com/abdulsalamwahab-dev/community-discussion-platform.git2. Database Setup:
Create a new database in phpMyAdmin named discussion_db.
Import the .sql file located in the /sql directory.
3. Configuration:
Update your database credentials in the config.php or connection file.
4. Run the App:
Move the folder to your htdocs or www directory and access it via localhost/community-discussion-platform.
:handshake: Contributing
Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.
Fork the Project
Create your Feature Branch (git checkout -b feature/AmazingFeature)
Commit your Changes (git commit -m 'Add some AmazingFeature')

Push to the Branch (git push origin feature/AmazingFeature)
Open a Pull Request
:bust_in_silhouette: Author
ABDUL SALAM WAHAB

GitHub: @abdulsalamwahab-dev
Role: Full Stack Developer / Software Engineer


Developed with a focus on clean code and community interaction.