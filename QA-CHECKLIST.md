## QA Checklist (1–2 pages)

This checklist is designed to validate the Figma-to-HTML implementation, responsiveness, accessibility, SEO, and Core Web Vitals.

### Visual & layout accuracy (Figma)

- **Spacing & alignment**
  - Verify consistent vertical rhythm between hero → sections → CTA.
  - Confirm padding inside cards/chips/forms matches the design intent.
  - Check text alignment changes between desktop and mobile are intentional.
- **Typography**
  - Validate heading hierarchy and relative sizes: H1 (hero), H2 (sections), supporting text.
  - Confirm line-height readability on long paragraphs.
- **Color & contrast**
  - Confirm gradient backgrounds and overlays don’t reduce text contrast.
  - Check buttons and chips retain strong contrast in all states.
- **Components**
  - Navbar links align and wrap properly at smaller widths.
  - Email CTA input + button align on desktop; stack on mobile.
  - Platform chips remain readable and don’t overflow.

### Responsive behavior

- **Breakpoints**
  - Test at: 360px, 390px, 414px, 768px, 1024px, 1280px, 1440px.
- **Mobile layout**
  - Navbar collapses and toggles correctly.
  - Hero badge scales without cropping or overlapping text.
  - Forms stack: input above button; both full-width.
- **No overflow**
  - No horizontal scrolling at any breakpoint.
  - Decorative gradients/shapes remain clipped and don’t create overflow.

### Accessibility (basic)

- **Keyboard navigation**
  - Tab order: skip link → navbar → hero form → sections → bottom form.
  - Visible focus states present on links, buttons, inputs.
- **Semantic HTML**
  - Single `h1` on the page; subsequent section headings use `h2`.
  - Main content wrapped in `main`.
- **Labels**
  - Email input has an accessible label (screen-reader label is acceptable).
  - Navbar has an accessible label.
- **Color contrast**
  - Validate text over gradients is readable (ideally WCAG AA).

### SEO basics

- **Metadata**
  - Page has a descriptive `<title>`.
  - Page has a `<meta name="description">`.
- **Headings**
  - Heading structure is logical and not skipped.

### Core Web Vitals / performance

- **CLS**
  - No layout shifting when fonts load or when the navbar collapses.
  - Images (if added later) use fixed dimensions or `aspect-ratio`.
- **LCP**
  - Hero content renders quickly; avoid blocking assets.
  - Bootstrap JS is loaded with `defer`.
- **General**
  - Keep CSS lean; avoid heavy JS (only Bootstrap bundle used).
  - Confirm no console errors.

### Cross-browser sanity checks

- **Browsers**
  - Chrome (latest), Firefox (latest).
  - If available: Safari (macOS/iOS) for gradients and form styling.
- **Checks**
  - Gradients and backdrop blur degrade gracefully.
  - Layout remains stable and legible.
