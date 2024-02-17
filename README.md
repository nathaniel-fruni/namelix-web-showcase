# Namelix Web Showcase

## Štruktúra projektu

- `admin/` Admin rozhranie.
    - `admin_banner/`: Admin rozhranie pre úpravu banner sekcie.
    - `admin_projects/`: Admin rozhranie pre úpravu sekcie projektov.
    - `admin_team/`: Admin rozhranie pre úpravu tím sekcie.
    - `auth/`:
      - `Auth.php`: Trieda pre autorizáciu používateľa.
      - `auth_check.php`: Kontrola, či je používateľ prihlásený.
    - `admin_home.php`: Domovská stránka admin rozhrania.
    - `login.php`: Admin prihlasovacia stránka.
    - `logout.php`: Odhlásenie používateľa.
- `assets/`: Static assets.
- `database/`: Obsahuje súbor pre importovanie databázy.
- `form_handle/`: Files that handle form submissions.
- `parts/`: Parts of the webpage with dynamically generated content.
- `BodyFunctions.php`: Class that handles database connection and CRUD operations.
- `index.php`

## Vlastnosti

- Dynamický generovaný obsah.
- Admin rozhranie pre úpravu obsahu. (meno: admin@gmail.com heslo: 123)

## Zdroj šablóny

Tento projekt používa šablónu z [TemplateMo](https://templatemo.com/).

## Licencia

Tento projekt je licencovaný pod MIT licenciou - pre viac informácií si prečítajte súbor [LICENSE](LICENSE.md).