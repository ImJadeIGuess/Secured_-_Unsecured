# Secured vs. Unsecured Web Application

A web development project that compares secured and unsecured implementations of a login-based web application. It demonstrates the importance of input validation, authentication, authorization, and protecting application resources.

## 📌 Project Overview

This repository contains two separate implementations for studying the differences between secured and unsecured web applications.

- **Unsecured (`jsindex`)** — Demonstrates a web application with fewer security protections.
- **Secured (`securejs`)** — Demonstrates security improvements intended to protect authentication and application resources.

The project highlights common web security risks and the importance of implementing proper security measures during development.

## ✨ Features

- Login page interface
- Secured and unsecured implementations for comparison
- Input validation and error handling
- Authentication and access control concepts
- Protected resources in the secured implementation
- Simple and consistent user interface

## 🛠️ Technologies

- HTML
- CSS
- JavaScript
- Visual Studio Code

*The technology list should reflect the actual files and dependencies used in the project.*

## 📂 Project Structure

```text
Secured_-_Unsecured/
├── jsindex/       # Unsecured implementation
├── securejs/      # Secured implementation
└── README.md
```

## 🚀 Getting Started

### Prerequisites

- A modern web browser
- Visual Studio Code
- Live Server extension for VS Code (optional)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/ImJadeIGuess/Secured_-_Unsecured.git
   ```

2. Open the project folder in Visual Studio Code:

   ```bash
   cd Secured_-_Unsecured
   code .
   ```

3. Open either the `jsindex` or `securejs` folder.

4. Run the corresponding HTML entry point using Live Server or open it directly in your browser, depending on the project's requirements.

## 🔐 Security Comparison

| Aspect | Unsecured | Secured |
|---|---|---|
| Input validation | Limited or missing protections | Improved validation |
| Authentication | Demonstrates weaker protections | Implements authentication safeguards |
| Authorization | May lack proper access restrictions | Applies access-control measures |
| Resource protection | May expose restricted functionality | Restricts access to protected resources |
| Security objective | Demonstrate potential vulnerabilities | Demonstrate defensive practices |

Actual protections depend on the implementation in each project. Client-side validation alone does not provide reliable security; authentication and authorization must be enforced by a trusted server.

## 🎯 Learning Objectives

- Understand common web application security risks.
- Compare vulnerable and security-conscious implementations.
- Learn the importance of input validation and authentication.
- Understand authorization and protected resources.
- Practice applying secure coding principles.

## ⚠️ Disclaimer

This project is intended for educational purposes only. Test security vulnerabilities only in environments you own or have explicit permission to assess. The unsecured implementation should not be used to handle real user accounts, passwords, or sensitive information.

## 👨‍💻 Author

**Jaderick Bordones Bolivar**

- GitHub: [@ImJadeIGuess](https://github.com/ImJadeIGuess)

---

*Built as a learning project to explore web application security and secure coding practices.*
