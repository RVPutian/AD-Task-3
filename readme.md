<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/RVPutian/">
    <img src="./assets/img/ditto.gif" alt="Nyebe" width="130" height="100">
  </a>

  <h3 align="center">AD-Task-3</h3>
</div>

<div align="center">
  AD-Task-3 is an activity where we will use SQL and Docker to create tables for our upcoming projects
</div>

<br />


---

<br />
<br />

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- The following are just sample -->

AD-task-3 is a full-stack PHP project designed to demonstrate modern web development practices using Docker, PostgreSQL, and MongoDB. The project provides a modular, environment-based PHP backend that supports user authentication, role management, and automated database setup. With Docker Compose, the entire development environment—including PHP, PostgreSQL, and MongoDB services—can be spun up with a single command, ensuring consistency across different machines.

Key features include:

Environment variable management using .env and phpdotenv
Automated database migration and seeding for PostgreSQL
Modular PHP structure with clear separation of components, handlers, and utilities
User authentication with secure password hashing and session management
Custom error handling and reusable UI components
Integration with both PostgreSQL (for relational data) and MongoDB (for NoSQL scenarios)
Ready-to-use Docker Compose setup for easy local development and deployment
AD-task-3 serves as a robust template for building scalable, secure, and maintainable PHP web applications with modern DevOps and database practices.

### Key Components


<!-- The following are just sample -->

- Environment-based configuration using `.env` and `phpdotenv`
- Dockerized development environment with Docker Compose
- PostgreSQL and MongoDB integration for data storage
- User authentication and authorization system
- User grouping and role management
- Modular PHP file structure (handlers, utils, components)
- Automated database schema creation with SQL scripts
### Technology


#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework/Library

![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

#### Databases
![MySQL](https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white)
![MongoDB](https://img.shields.io/badge/MongoDB-47A248?style=for-the-badge&logo=mongodb&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)

#### Deployment


## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-ProjectName
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ name.component.php
|   └─ templates
|      └─ name.component.php
└─ handlers
|   └─ name.handler.php
└─ layout
|   └─ name.layout.php
└─ pages
|  └─ pageName
|     └─ assets
|     |  └─ css
|     |  |  └─ name.css
|     |  └─ img
|     |  |  └─ name.jpeg/.jpg/.webp/.png
|     |  └─ js
|     |     └─ name.js
|     └─ index.php
└─ staticData
|  └─ name.staticdata.php
└─ utils
|   └─ name.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

