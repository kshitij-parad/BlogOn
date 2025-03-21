# BlogOn

**A simple blogging platform built with PHP and MySQL**

BlogOn allows users to create, manage, and share blog posts with ease. It features user profiles, blog management, feedback submission, and an admin dashboard for oversight.

## Overview

BlogOn is a web application that enables users to:
- Sign up and create blog posts
- Manage their profiles and blogs
- Submit feedback
- Admins can oversee users and content via a dashboard

Built with PHP, MySQL, and Bootstrap, it offers a responsive and user-friendly experience.

## Features

- **User Features**  
  - Sign up and log in  
  - Create, view, and delete blog posts  
  - View and edit profile (name, email, mobile, gender, etc.)  

- **Admin Features**  
  - View all registered users  
  - Search and manage blog posts by author  
  - Review user feedback  

- **Feedback**  
  - Submit feedback via a contact form  

## Tech Stack

| **Category**   | **Technologies**           |
|----------------|----------------------------|
| **Frontend**   | HTML, CSS, Bootstrap 4, Font Awesome |
| **Backend**    | PHP                       |
| **Database**   | MySQL (port 3307)         |
| **Environment**| XAMPP (local development) |

## Project Structure

```
Blogon/
├── Code/
│   ├── signup.php                 # User registration
│   ├── login.php                  # User login (incomplete)
│   ├── profile.php                # User profile
│   ├── createblog.php             # Blog creation
│   ├── createblog.html            # Blog creation form
│   ├── showmyblog.php             # View user's blogs
│   ├── deleteblog.php             # Delete blogs
│   ├── feedback.php               # Feedback submission
│   ├── admindashboard.php         # Admin dashboard
│   ├── showparticularuserblog.php # Search blogs by author
│   ├── showallblog.php            # View all blogs (incomplete)
│   ├── afeedback.php              # Admin feedback view (incomplete)
│   ├── editprofile.php            # Edit profile (incomplete)
├── css/
│   ├── newlogin.css               # Login/signup styles
│   ├── template.css               # Blog template styles
│   ├── home.css                   # General styles
├── images/                        # Avatars and blog images
└── index.html                     # Landing page
```

## Database Schema

### Database: `blogon`

#### Tables:
- **signup** (User data):
  - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
  - `email` (VARCHAR(100), NOT NULL)
  - `name` (VARCHAR(100), NOT NULL)
  - `username` (VARCHAR(50), NOT NULL)
  - `paswd` (VARCHAR(255), NOT NULL)
  - `mobile` (VARCHAR(20), NOT NULL, DEFAULT '')
  - `gender` (VARCHAR(10), NOT NULL, DEFAULT '')
  - `dob` (DATE, NOT NULL, DEFAULT '1970-01-01')
  - `proff` (VARCHAR(50), NOT NULL, DEFAULT '')
- **blog** (Blog posts):
  - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
  - `title` (VARCHAR(255), NOT NULL)
  - `category` (VARCHAR(50), NOT NULL)
  - `author` (VARCHAR(50), NOT NULL)
  - `image` (VARCHAR(255), NOT NULL)
  - `content` (TEXT, NOT NULL)
  - `template` (VARCHAR(50), NOT NULL)
- **feedback** (Feedback entries):
  - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
  - `name` (VARCHAR(100), NOT NULL)
  - `mobile` (VARCHAR(20), NOT NULL)
  - `email` (VARCHAR(100), NOT NULL)
  - `msg` (TEXT, NOT NULL)

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/BlogOn.git
cd BlogOn
```

### 2. Setup XAMPP
- Install XAMPP and start Apache and MySQL (port 3307).
- Place the project in `C:\xampp\htdocs\BlogOn\`.

### 3. Database Configuration
- Create the database:
  ```bash
  mysql -u root -p -P 3307
  ```
  ```sql
  CREATE DATABASE blogon;
  USE blogon;
  ```
- Import the schema:
  ```bash
  SOURCE C:/xampp/htdocs/BlogOn/blogon.sql;
  ```
  *(Copy the SQL below into `blogon.sql` in the project root)*

## Database SQL

```sql
CREATE DATABASE blogon;
USE blogon;

CREATE TABLE signup (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    paswd VARCHAR(255) NOT NULL,
    mobile VARCHAR(20) NOT NULL DEFAULT '',
    gender VARCHAR(10) NOT NULL DEFAULT '',
    dob DATE NOT NULL DEFAULT '1970-01-01',
    proff VARCHAR(50) NOT NULL DEFAULT ''
);

CREATE TABLE blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    author VARCHAR(50) NOT NULL,
    image VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    template VARCHAR(50) NOT NULL
);

CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    msg TEXT NOT NULL
);
```

## Usage

- **Users**: Sign up at `signup.php`, log in, create blogs, and manage your profile.
- **Admins**: Access `admindashboard.php` to manage users and content (requires admin login).

## Known Issues

- `login.php` is incomplete—needs full session handling.
- Queries are vulnerable to SQL injection; use prepared statements in production.
- Some features (e.g., `editprofile.php`, `afeedback.php`) are not fully implemented.

## Contributing

- Fork the repository.
- Create a branch, make changes, and submit a pull request.

## Author

- kshitij-parad

