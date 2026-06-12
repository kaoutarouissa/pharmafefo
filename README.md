# Système de Gestion de Stock Pharma FEFO

Ce projet est un système de gestion de stock pharmaceutique basé sur le principe FEFO (First Expired, First Out).
Il permet de gérer efficacement les produits, les lots, les dates de péremption, les entrées de stock et les opérations de dispensation.

## Fonctionnalités

Gestion des produits et des lots

Suivi automatique des dates de péremption

Gestion du stock selon FEFO (les produits les plus proches de la péremption sont utilisés en premier)
Entrée de stock (réception des produits)
Sortie de stock (vente / dispensation)
Alertes pour stock faible et produits proches de la péremption
Authentification des utilisateurs (Admin / Pharmacien / Gestionnaire de stock)ager)

## Tech Stack

- **PHP 8** (Programmation Orientée Objet)
- **MySQL** (Base de données)
- **PDO** (Connexion sécurisée)
- **Tailwind CSS** (Interface utilisateur via CDN)
- **PHP Sessions** (Authentification)


## structure du projet 
<img width="692" height="439" alt="image" src="https://github.com/user-attachments/assets/da17c3fb-e4f1-49e3-8c3f-b32cc1b86045" />
      


## les diagrammes 

# erd
<img width="688" height="414" alt="image" src="https://github.com/user-attachments/assets/1e696872-f524-4569-aeb0-c236ac1a55fb" />

# class
<img width="656" height="539" alt="image" src="https://github.com/user-attachments/assets/f6a409de-92aa-45fa-a49c-cd14f14fdd58" />

# use_case

<img width="790" height="608" alt="image" src="https://github.com/user-attachments/assets/b0084ae7-6c11-4abf-910d-2bd40577eec8" />


## instalation

### 1. Prérequis

- PHP 8.0
- MySQL 5.7
- Serveur web (Apache/Nginx)

### 2. Base de données

### 3. Configuration

Modifiez le fichier `.env` à la racine du projet :

```env
DB_HOST=localhost
DB_NAME=pharma_fefo
DB_USER=root
DB_PASS=
```

### 4. "git clone https://github.com/votre-utilisateur/pharmafefo.git"

### 5. run projet

http://localhost/PharmaFEFO/public/index.php

## les comptes pour tester

| Rôle        | Email                          | Mot de passe |
|--------    -|--------------------------------|--------------|
| Admin       | admin@gmail.com                | 1234         |
| preparateur | prepa@gmail.com                | 1234         |
| pharmacien  | pharma@gmail.com               | 1234         |
