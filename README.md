# Point of Sale (POS) System

A simple Point of Sale (POS) system built with PHP and MySQL for managing administrative tasks, collaborators, products, clients, services, and sales.

## Features

- **CRUD Operations**: Create, Read, Update, Delete records for:
  - Administración (Administration)
  - Colaboradores (Collaborators)
  - Productos (Products)
  - Clientes (Clients)
  - Servicios (Services)
  - Ventas (Sales)
  - Detalles de Ventas (Sales Details)
- **Responsive Sidebar Navigation**: Easy access to all modules.
- **Basic Styling**: Clean and functional UI with CSS.
- **Database Integration**: MySQL backend for data storage.

## Installation

1. **Prerequisites**:
   - PHP server (e.g., XAMPP, WAMP).
   - MySQL database.

2. **Setup**:
   - Clone/download the repository into your server's `htdocs` or `www` directory.
   - Create a MySQL database named `punto.venta` and import the tables using the SQL schema inferred from the code.
   - Update `connection.php` with your database credentials:
     ```php
     $host = "localhost";
     $user = "root"; // Your MySQL username
     $pass = ""; // Your MySQL password
     ```

3. **Run**:
   - Access the system via `http://localhost/punto.venta/index.php`.

## Usage

1. **Navigation**:
   - Use the sidebar to switch between modules (Administration, Collaborators, Products, etc.).
   - Click "Insertar" buttons to add new records.
   - Use "Editar" or "Eliminar" links in tables to modify or delete entries.

2. **Modules**:
   - **Sales (Ventas)**:
     - Add sales with location, client, and collaborator details.
     - Navigate to "Detalles" to manage sale-specific items (products, quantities, prices).
   - **Products (Productos)**:
     - Track product stock, category, and failure rates.
   - **Clients (Clientes)**:
     - Manage client information and link them to collaborators.

## Database Structure (Inferred)

Tables include:
- `administracion`: `nombre_administracion`, `domicilio_administracion`, `telefono_administracion`.
- `colaboradores`: Collaborator details and linked administration.
- `productos`: Product details, stock, and pricing.
- `clientes`: Client info with collaborator associations.
- `ventas` and `venta_detalle`: Sales records and itemized details.
- `servicios`: Service types and pricing.

## Technologies Used

- **Backend**: PHP, MySQL.
- **Frontend**: HTML, CSS (with Font Awesome icons).
- **Tools**: XAMPP/WAMP for local hosting.
