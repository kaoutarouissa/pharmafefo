#### Pharma FEFO Stock Management System
📌 Description

This project is a pharmacy stock management system based on the FEFO (First Expired, First Out) principle.
It helps manage products, batches, expiry dates, stock entries, and dispensing operations efficiently.

🚀 Features
Manage products and batches
Track expiry dates automatically
FEFO stock خروج (oldest expiry first)
Stock entry (reception of products)
Stock خروج (sales / dispensing)
Alerts for low stock and near expiry
User authentication (Admin / Pharmacist / Stock Manager)
🛠️ Tech Stack
PHP (Vanilla / MVC structure)
MySQL
HTML / CSS / Bootstrap
JavaScript (optional for UI)


## structure du projet 
pharmafefo/
├── config/                 # Configurations de l'application
│   └── database.php 
├── public/ 
│   └── index.php 
├── src/
│   ├── Controller/ 
│   │   ├── DashboardController.php
│   │   └── StockController.php
│   ├── Entity/ 
│   │   ├── Product.php
│   │   └── StockBatch.php  
│   ├── Enum/ 
│   │   └── BatchStatus.php 
│   └── Repository/ 
│       └── StockBatchRepository.php
└── templates/ 
    ├── dashboard/
    │   └── index.php 
    └── layout/
        └── base.php        


## les diagrammes 
# erd
# class
# use_case


## instalation
git clone 
## databese 
## run projet
http://localhost/pharmafefo/
## les comptes pour tester