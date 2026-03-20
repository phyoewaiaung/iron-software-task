# QA Checklist - IronPDF for C++ Landing Page

**Project:** IronPDF for C++ Landing Page (CodeIgniter 4)  
**Status:** Production Ready  
**Date:** 2026-03-21

## Visual & Layout Accuracy (Figma)

### Spacing & Alignment
- [x] Verify consistent vertical rhythm between hero → sections → CTA
- [x] Confirm padding inside cards/chips/forms matches design intent
- [x] Check text alignment changes between desktop and mobile are intentional

### Typography
- [x] Validate heading hierarchy: H1 (hero), H2 (sections), supporting text
- [x] Confirm line-height readability on long paragraphs
- [x] Gotham font family loaded with Montserrat fallback

### Color & Contrast
- [x] Confirm gradient backgrounds don't reduce text contrast
- [x] Check buttons and chips retain strong contrast in all states
- [x] WCAG AA compliance for text readability

### Components
- [x] Navbar links align and wrap properly at smaller widths
- [x] Email CTA input + button align on desktop; stack on mobile
- [x] Platform chips remain readable and don't overflow

## Responsive Behavior

### Breakpoints
- [x] Test at: 360px, 390px, 414px, 768px, 1024px, 1280px, 1440px
- [x] Large desktop (1200px+) - Bootstrap containers handle spacing
- [x] Tablet (768-1199px) - Content adapts properly
- [x] Mobile (480-767px) - Stacked layout, forms full-width
- [x] Small mobile (≤479px) - Optimized font sizes and spacing

### Mobile Layout
- [x] Navbar collapses to hamburger menu on mobile
- [x] Hero badge scales without cropping or overlapping text
- [x] Forms stack: input above button; both full-width
- [x] Hamburger menu accessible and functional

### No Overflow
- [x] No horizontal scrolling at any breakpoint
- [x] Decorative gradients/shapes remain clipped
- [x] SVG images properly cropped, no empty space

## Accessibility (Basic)

### Keyboard Navigation
- [x] Tab order: skip link → navbar → hero form → sections → bottom form
- [x] Visible focus states on links, buttons, inputs
- [x] Skip link functional for screen readers

### Semantic HTML
- [x] Single h1 on page; section headings use h2
- [x] Main content wrapped in main tag with id
- [x] Proper use of section tags for content grouping

### Labels
- [x] Email inputs have aria-label attributes
- [x] Navbar has accessible label
- [x] All images have descriptive alt text

### Color Contrast
- [x] Validate text over gradients is readable (WCAG AA)
- [x] Interactive elements meet contrast requirements
- [x] Reduced motion support implemented

## SEO Basics

### Metadata
- [x] Descriptive title tag from JSON data
- [x] Meta description tag from JSON data
- [x] Open Graph meta tags (title, description, type, image)
- [x] Twitter Card meta tags
- [x] Structured data (JSON-LD) for SoftwareApplication

### Headings
- [x] Heading structure is logical and not skipped
- [x] Proper h1-h6 hierarchy maintained

## Core Web Vitals / Performance

### CLS (Cumulative Layout Shift)
- [x] No layout shifting when fonts load
- [x] No layout shifting when navbar collapses
- [x] Images use fixed dimensions or aspect-ratio
- [x] Font preloading implemented

### LCP (Largest Contentful Paint)
- [x] Hero content renders quickly
- [x] No blocking assets
- [x] Bootstrap JS loaded with defer attribute
- [x] Critical CSS inlined

### General
- [x] CSS is lean; no heavy JS (only Bootstrap bundle used)
- [x] No console errors
- [x] Image lazy loading implemented
- [x] CSS custom properties for performance

## Lighthouse Checks

- [x] Performance score optimized (font preloading, lazy loading)
- [x] Accessibility score (semantic HTML, ARIA labels, alt text)
- [x] Best Practices score (no console errors, modern HTTPS)
- [x] SEO score (meta tags, structured data, proper headings)
- [x] Progressive Web App considerations (manifest ready)

## Cross-Browser Behavior

- [x] Chrome (latest) - All features working correctly
- [x] Firefox (latest) - CSS gradients and custom scrollbars functional
- [x] Safari compatibility - Font loading and responsive design
- [x] Edge (Chromium) - Bootstrap and custom CSS working
- [x] Mobile browsers - Touch interactions and viewport handling

## Data Management & Code Quality

- [x] All content from JSON (no hardcoded text)
- [x] Span-aware JSON structure preserves design intent
- [x] XSS prevention with PHP esc() function
- [x] Modular CSS architecture (base, style, hamburger)
- [x] FontAwesome CDN properly loaded
- [x] Custom scrollbar styling implemented

## Assignment Requirements Verification

- [x] Latest HTML5, CSS3, JavaScript used
- [x] Bootstrap 5.3.3 + clean custom CSS
- [x] Minimal JavaScript (hamburger menu only)
- [x] Figma design converted pixel-perfect
- [x] Responsive across all screen sizes
- [x] Semantic HTML5 structure
- [x] Basic accessibility implemented
- [x] Core Web Vitals optimization

## Final Assessment

### Overall Status: PRODUCTION READY

### Key Features Implemented:
- Pixel-perfect Figma implementation
- Complete responsive design with Bootstrap containers
- Advanced SEO (meta tags, structured data)
- Professional accessibility features
- Core Web Vitals optimization
- Data-driven content management
- Modern web development best practices

**All assignment requirements met and exceeded.**
