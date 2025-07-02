# 🌍 AWD SARL – Site Vitrine

Site web vitrine de **AWDSarl**, une Entreprise de Services Numériques spécialisée dans le développement de solutions logicielles innovantes à fort impact social.

> Développé avec **Laravel 12**, **Tailwind CSS 4**, et conforme au cahier des charges officiel.

---

## 📌 Présentation

AWDSarl est une startup technologique intervenant dans :

- 💻 Développement web & mobile
- 🧩 Conception de logiciels & ERP
- 🎨 Design UI/UX & branding digital
- 💳 Paiement numérique et agrégation de services financiers

Le site met en avant les filiales, services, réalisations et la vision de l’entreprise.

---

## 🛠️ Stack technique

- **Backend** : Laravel 12
- **Frontend** : Tailwind CSS v4
- **Déploiement local** : PHP 8+, Composer, Node.js, npm

---

## ⚙️ Installation (locale)

```bash
git clone https://github.com/Nao077/awd-sarl-web.git
cd awd-sarl-web

# Installer les dépendances
composer install
npm install

# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate

# Lancer le serveur
php artisan serve

# Compiler les assets (CSS/JS)
npm run dev
