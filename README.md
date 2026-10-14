# M.C.E. Society's Anglo Urdu Girls' High School (AUGHS) - PHP Website Clone

A full-featured, responsive PHP clone of [aughs.org](https://aughs.org/) built for **Anglo Urdu Girls' High School, Azam Campus, Pune**.

---

## 🌟 Features & Highlights

- **Complete Site Replication**: Every page, menu, submenu, and data point from `aughs.org` has been reproduced without skipping any content.
- **Pure Modern PHP Architecture**: Modular component structure (`includes/header.php`, `includes/footer.php`, `includes/page-banner.php`, `config.php`).
- **All Authentic Media & Photos**: Over 275+ original photos of the campus, faculty members, classrooms, computer labs, science laboratories, sports ground, trophy distributions, and events saved locally in `wp-content/uploads/`.
- **Responsive Navigation**: Desktop dropdown menus with indicators and mobile slide-out accordion menu.
- **Interactive Features**:
  - Interactive Photo Gallery with category filters and modal lightbox.
  - Interactive Contact inquiry form with validation.
  - Complete 66-student SSC Board Merit Table (1993 to 2019).
  - All 8 Administration & Committee tables (Governing Board, Teaching Staff, Non-Teaching Staff, POCSO Committee, etc.).
  - Authentic Urdu calligraphy & poetry with RTL script styling.
  - 12 Mathematics faculty profile cards with original teacher photographs.

---

## 🗂️ Site Map & Pages

| Section | Page URL / File | Description & Contents |
| :--- | :--- | :--- |
| **Home** | `index.php` | Hero slider, Principal message spotlight, campus highlights, stats counter, quick cards |
| **About Us** | `about-us.php` | Overview of AUGHS, M.C.E. Society history, academic pillars |
| ↳ *Our Philosophy* | `our-philosophy.php` | Educational philosophy, commitments, and core values |
| ↳ *Mission & Vision* | `mission-vission.php` | 21st-century holistic development and joyful learning |
| ↳ *President Message* | `president-message.php` | Address by Hon’ble Dr. P.A. Inamdar with original portrait |
| ↳ *Principal Message* | `principal-message.php` | Address by Mrs. Roshan Ara Shaikh with original portrait |
| **Admission** | `admission.php` | 3-Step admission process, document checklist, Google Form link |
| **Activities** | `activities.php` | Art contest, National IT Olympiad, Rifle Shooting, Flower arrangement, R.S.P. Troop |
| **Facility** | `facility.php` | Classrooms, Computer Lab, Physics, Chemistry, Biology labs, Library, Sports ground |
| **Achievements** | `achievements.php` | Overview of academic and faculty accolades |
| ↳ *Staff Achievements* | `staff-achievements.php` | Intra-campus throwball champions, CCC certification, Best Teacher award |
| ↳ *Student Achievements*| `student-achievements.php` | Historic 66-student SSC Board Toppers & Pune Division merit table |
| **Information** | `information.php` | Governing Board (15 members), School Committee, 41 Teaching Staff, Service Staff |
| ↳ *Rules & Regulations* | `rules-regulations.php` | Campus discipline, uniform code, library and laboratory rules |
| **Departments** | `departments.php` | Scholastic departments overview hub |
| ↳ *Urdu Department* | `urdu-department.php` | Urdu literature, poetic couplets, and Mrs. Farheen Arif Khan profile |
| ↳ *Maths Department* | `maths-department.php` | Inamdar Maths Academy, quiz programs, and 12 faculty profiles with photos |
| ↳ *Science Department*| `science-department.php` | Empirical exploration, laboratories, and Mrs. Yasmeen Sameer Shaikh profile |
| ↳ *History Department*| `history-department.php` | Systematic historical past, Nazneen Sadique Shaikh profile |
| ↳ *Geography Department*| `geography-department.php`| Environmental days, field visits, and Mrs. Minaz Naeem Tamboli profile |
| ↳ *English Department*| `english-department.php` | Communicative fluency, language lab, grammar, and elocution |
| **Gallery** | `gallery.php` | Photo gallery with category filter tabs and interactive image lightbox modal |
| **Contact** | `contact.php` / `contact-2.php` | Contact details, Google Map embed, and interactive PHP message submission form |

---

## 🚀 How to Run Locally

### Option 1: Using XAMPP (Apache)
1. Open **XAMPP Control Panel**.
2. Start the **Apache** module.
3. Open your web browser and navigate to:
   ```
   http://localhost/aughs/
   ```

### Option 2: Using Built-in PHP Development Server
Run the following command in PowerShell / Terminal:
```bash
php -S localhost:8080 -t "C:\xampp\htdocs\aughs"
```
Then navigate to `http://localhost:8080/` in your browser.

---

## 📁 Directory Structure

```
c:\xampp\htdocs\aughs\
├── config.php                   # Site constants, base URL helper, contact config
├── .htaccess                    # Pretty URLs and directory security
├── includes/
│   ├── header.php               # Top bar, branding, responsive navigation bar
│   ├── footer.php               # Multi-column footer, contact details, scripts
│   └── page-banner.php          # Dynamic page banner and breadcrumbs
├── assets/
│   ├── css/
│   │   └── style.css            # Custom responsive CSS design system
│   └── js/
│       └── main.js              # Mobile drawer toggle, lightbox modal, filter tabs
├── index.php                    # Homepage
├── about-us.php                 # About Us Hub
├── our-philosophy.php           # Philosophy
├── mission-vission.php          # Mission & Vision
├── president-message.php        # President Message
├── principal-message.php        # Principal Message
├── admission.php                # Admission Process
├── activities.php               # Activities & Competitions
├── facility.php                 # Campus Facilities & Labs
├── achievements.php             # Achievements Hub
├── staff-achievements.php       # Staff Trophies & Awards
├── student-achievements.php     # 66 SSC Toppers Merit Table
├── information.php              # Governing Board & 8 Committee Tables
├── rules-regulations.php        # Discipline Rules & Guidelines
├── departments.php              # Departments Hub
├── maths-department.php         # Maths Department (12 Faculty Cards)
├── science-department.php       # Science Department
├── urdu-department.php          # Urdu Department (Poetry & Calligraphy)
├── history-department.php       # History Department
├── geography-department.php     # Geography Department
├── english-department.php       # English Department
├── gallery.php                  # Interactive Photo Gallery with Lightbox
├── contact.php                  # Contact Us & Interactive Form
├── contact-2.php                # Compatibility Permalink Alias
└── wp-content/                  # Downloaded authentic media & upload assets
```
