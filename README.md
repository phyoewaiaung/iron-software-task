# Iron Software Assignment — IronPDF for C++ Landing Page (CodeIgniter 4)

A production-ready, responsive landing page implementing the provided Figma design with modern web development best practices, SEO optimization, and accessibility features.

## 🚀 Key Features

- **Pixel-perfect Figma implementation** with exact typography and spacing
- **Fully responsive design** across all breakpoints (mobile to desktop)
- **Advanced SEO optimization** (meta tags, structured data, Open Graph)
- **Professional accessibility** (ARIA labels, keyboard navigation, reduced motion)
- **Core Web Vitals optimization** (font preloading, lazy loading, performance)
- **Data-driven content management** with JSON backend
- **Modern JavaScript interactions** (mobile hamburger menu)

## 🛠 Technology Stack

- **Backend**: CodeIgniter 4 (PHP 8.2+)
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Framework**: Bootstrap 5.3.3 (CDN)
- **Fonts**: Gotham (primary), Montserrat (fallback)
- **Icons**: FontAwesome 6.4.0
- **Architecture**: MVC pattern with modular CSS

## 📁 Project Structure

```
├── app/
│   ├── Controllers/
│   │   └── Home.php              # Main controller
│   └── Views/
│       ├── layout/
│       │   ├── header.php        # HTML head & navigation
│       │   └── footer.php        # Scripts & closing tags
│       └── home.php              # Main landing page
├── public/
│   ├── assets/
│   │   ├── css/
│   │   │   ├── base.css          # Fonts, variables, utilities
│   │   │   ├── style.css         # Main responsive styles
│   │   │   └── hamburger.css     # Mobile navigation
│   │   ├── js/
│   │   │   └── main.js           # Hamburger menu & interactions
│   │   ├── data/
│   │   │   └── content.json      # All page content
│   │   └── img/                  # Images and SVG assets
│   └── qa-checklist.html         # Interactive QA checklist
├── QA-CHECKLIST.md               # Markdown QA checklist
└── README.md                     # This file
```

## 🏃‍♂️ Quick Start

### Prerequisites

- PHP 8.2+ (tested with PHP 8.4)
- Composer
- Modern web browser

### Installation

1. **Clone and install dependencies**
   ```bash
   composer install
   ```

2. **Start development server**
   ```bash
   php spark serve
   ```

3. **Open in browser**
   ```
   http://localhost:8080/
   ```

## 🎯 Key Implementation Details

### Responsive Design
- **Large desktop (1200px+)**: Full layout with optimal spacing
- **Tablet (768-1199px)**: Adapted content and navigation
- **Mobile (480-767px)**: Stacked layout with hamburger menu
- **Small mobile (≤479px)**: Optimized typography and spacing

### Performance Optimizations
- **Font preloading**: Critical Gotham font preloaded
- **Image lazy loading**: `loading="lazy"` attribute
- **Deferred JavaScript**: Bootstrap JS with `defer` attribute
- **CSS custom properties**: Modern, performant styling
- **Minimal JavaScript**: Only essential interactions

### SEO & Accessibility
- **Semantic HTML5**: Proper structure with `<main>`, `<section>`, `<nav>`
- **Meta tags**: Title, description, keywords, robots
- **Open Graph**: Facebook/social media sharing
- **Twitter Cards**: Twitter optimization
- **Structured data**: JSON-LD schema markup
- **ARIA labels**: Screen reader support
- **Keyboard navigation**: Skip links and focus management
- **Reduced motion**: Accessibility preference support

### Security
- **XSS prevention**: All output escaped with `esc()` function
- **Modern practices**: No console logs in production

## 🔧 Customization Guide

### Content Management
All text content is centralized in `public/assets/data/content.json`:

```json
{
  "meta": {
    "title": "IronPDF for C++ — Beta Software Program",
    "description": "IronPDF for C++ landing page"
  },
  "hero": {
    "kicker": "Building on the success of IronPDF for .NET",
    "titleLine1": "Beta Software Program",
    "titleLine2": "IronPDF for C++"
  }
}
```

### Styling Architecture
- **`base.css`**: Fonts, CSS variables, utilities, accessibility
- **`style.css`**: Main responsive styles and component styles
- **`hamburger.css`**: Mobile navigation and menu interactions

### JavaScript Features
- **Mobile hamburger menu**: Accessible toggle with click-outside support
- **Smooth transitions**: CSS-based animations and micro-interactions
- **Form enhancements**: Focus states and accessibility improvements

## 📊 Quality Assurance

### QA Checklist
- **Interactive HTML**: `/public/qa-checklist.html`
- **Markdown version**: `QA-CHECKLIST.md`

### Lighthouse Scores (Expected)
- **Performance**: 90+ (optimized loading and rendering)
- **Accessibility**: 95+ (comprehensive ARIA support)
- **Best Practices**: 95+ (modern standards compliance)
- **SEO**: 100+ (complete meta optimization)

### Browser Compatibility
- ✅ Chrome (latest)
- ✅ Firefox (latest) 
- ✅ Safari (latest)
- ✅ Edge (Chromium)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🎨 Design Fidelity

- **Typography**: Gotham font family with exact Figma specifications
- **Colors**: Exact color matches from design system
- **Spacing**: Pixel-perfect margins and padding
- **Components**: All interactive elements styled to specification
- **Responsive**: Adaptive layout maintaining design integrity

## 🚀 Production Deployment

This project is **production-ready** with:
- Optimized asset loading
- Security best practices
- SEO optimization
- Accessibility compliance
- Performance optimizations
- Cross-browser compatibility

## 📝 Assignment Requirements Met

- ✅ Latest HTML5, CSS3, JavaScript
- ✅ Bootstrap 5 + clean custom CSS
- ✅ Minimal JavaScript (only when necessary)
- ✅ Pixel-perfect Figma implementation
- ✅ Fully responsive design
- ✅ Semantic HTML5 structure
- ✅ Basic accessibility implementation
- ✅ Core Web Vitals optimization
- ✅ SEO best practices
- ✅ Cross-browser compatibility

---

**Status**: ✅ Production Ready | **QA**: ✅ Passed | **Performance**: ✅ Optimized
# iron-software-task
