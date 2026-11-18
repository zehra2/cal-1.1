# America Calculator

## Overview
A comprehensive calculator portal website featuring 40+ specialized calculators built with PHP, HTML, and CSS. Optimized for SEO with schema markup, meta tags, and sitemap.

## Recent Changes
- **2025-11-05**: Major rebrand and SEO optimization
  - Rebranded from "Calculator Portal" to "America Calculator"
  - Added simple calculator widget to homepage
  - Implemented comprehensive SEO optimization:
    - Meta tags (title, description, keywords) on all pages
    - Schema.org structured data for all calculators
    - Created sitemap.xml for search engine crawling
  - Added 22 new calculator pages with SEO-optimized content
  - Enhanced CSS with matrix inputs, fraction inputs, and improved styling
  - Updated all calculators with canonical URLs
  
- **2025-11-05**: Initial project setup and security hardening
  - Created project structure with modular architecture
  - Implemented PHP backend with reusable templates
  - Designed responsive UI inspired by calculator.net
  - Implemented XSS protection with input sanitization
  - Added server-side validation and error handling

## Project Architecture
- **Backend**: PHP 8.2 (vanilla, no frameworks)
- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Structure**:
  - `/includes/` - Reusable header, footer, and navigation templates
  - `/calculators/` - Individual calculator pages
  - `/css/` - Stylesheets
  - `/js/` - JavaScript for search and interactivity
  - `index.php` - Homepage with featured calculators

## Features
- **SEO Optimized**: Meta tags, schema.org markup, sitemap.xml
- **Simple Calculator**: Interactive calculator on homepage
- Navigation menu with calculator categories
- Search functionality across all calculators
- 44 working calculators across 9 categories:
  
  **Financial (8)**
  - CD Interest Calculator
  - RV Loan Calculator
  - Dave Ramsey Retirement Calculator
  - Markup Calculator
  - Land Loan Calculator
  - Interest Only Loan Calculator
  - SBA Loan Calculator
  - Cap Rate Calculator
  
  **Construction (6)**
  - Concrete Calculator
  - Cubic Yard Calculator
  - Board Foot Calculator
  - Stair Calculator
  - Asphalt Calculator
  - Home Addition Cost Calculator
  
  **Technology (2)**
  - Bottleneck Calculator
  - Voltage Drop Calculator
  
  **Business (6)**
  - Freelance Rate Calculator
  - Overtime Calculator
  - Calculadora de Horas (Spanish)
  - Cálculo da Hora (Portuguese)
  - Ohio Paycheck Calculator
  - Freight Class Calculator
  
  **Gaming (3)**
  - Palworld Breeding Calculator
  - Blox Fruits Calculator
  - Terminus Calculator
  
  **Academic (4)**
  - Calculator Bacalaureat
  - Cumulative GPA Calculator
  - ACT Score Calculator
  - AP Lang Score Calculator
  
  **Math (7)**
  - RREF Calculator
  - Determinant Calculator
  - Inverse Matrix Calculator
  - Mixed Fraction Calculator
  - Partial Derivative Calculator
  - Differential Equation Calculator
  - Racine Carrée Calculator (French)
  
  **Health (4)**
  - FFMI Calculator
  - Corrected Calcium Calculator
  - RVU Calculator
  - ASQ Calculator
  
  **Other (4)**
  - Map Calculator
  - Grow a Garden Calculator
  - Saturn Return Calculator
  - Random Country Generator

- Mobile-responsive design
- Clean, professional layout
- XSS protection on all forms
- Server-side validation

## SEO Features
- **Meta Tags**: Custom title, description, and keywords for each calculator
- **Schema Markup**: JSON-LD structured data for search engines
- **Sitemap**: XML sitemap with all 44 calculators
- **Canonical URLs**: Proper canonical tags on all pages

## Next Phase
- Update navigation menu to include new calculators
- Add calculation history feature
- Implement favorites/bookmarking
- Advanced search with autocomplete
- Add more specialized calculators
