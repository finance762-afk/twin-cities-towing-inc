<?php
/**
 * Twin Cities Towing INC — Header / Navbar Component
 * Outputs: skip link, <header>, glassmorphism navbar, opens <main id="main-content">.
 * Requires: config.php + functions.php loaded (handled by head.php).
 */

// Determine if current page is inside the services or service-area section
$_inServices = isActivePage('services') || (isset($currentPage) && in_array($currentPage, array_column($services, 'slug')));
$_inAreas    = isActivePage('service-area') || (isset($currentPage) && in_array($currentPage, array_column($serviceAreas, 'slug')));

$_phoneHref    = !empty($phone) ? 'tel:' . preg_replace('/\D/', '', $phone) : '/contact';
$_phoneDisplay = !empty($phoneDisplay) ? $phoneDisplay : (!empty($phone) ? formatPhone($phone) : 'Free Estimate');
?>

<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
  <nav class="navbar" aria-label="Main navigation">
    <div class="navbar-inner container">

      <!-- ── Logo ─────────────────────────────────────────── -->
      <a href="/" class="site-logo" aria-label="Twin Cities Towing INC — Home">
        <?php if (!empty($logoUrl)): ?>
        <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="Twin Cities Towing INC" class="logo-img" width="279" height="68">
        <?php else: ?>
        <span class="logo-mark" aria-hidden="true">TC</span>
        <span class="logo-text">
          <span class="logo-name">Twin Cities Towing</span>
          <span class="logo-tagline">We'll Get You Moving Again!</span>
        </span>
        <?php endif; ?>
      </a>

      <!-- ── Primary Navigation ────────────────────────────── -->
      <ul class="nav-links" id="nav-links" role="list" aria-label="Site navigation">

        <li>
          <a href="/"
             <?php if (isActivePage('home')) echo 'aria-current="page"'; ?>>
            Home
          </a>
        </li>

        <!-- Services with dropdown -->
        <li class="nav-dropdown<?php echo $_inServices ? ' open' : ''; ?>">
          <a href="/services"
             <?php if ($_inServices) echo 'aria-current="page"'; ?>
             aria-haspopup="true">
            Services
            <span class="nav-chevron" aria-hidden="true">&#9660;</span>
          </a>
          <ul class="nav-dropdown-menu" role="list">
            <?php foreach ($services as $s): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($s['slug']); ?>"
                 <?php if (isActivePage($s['slug'])) echo 'aria-current="page"'; ?>>
                <?php echo htmlspecialchars($s['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
            <li style="border-top:1px solid var(--color-gray-light); margin-top:4px; padding-top:4px;">
              <a href="/services"><strong>View All Services</strong></a>
            </li>
          </ul>
        </li>

        <!-- Service Areas with dropdown -->
        <li class="nav-dropdown<?php echo $_inAreas ? ' open' : ''; ?>">
          <a href="/service-area"
             <?php if ($_inAreas) echo 'aria-current="page"'; ?>
             aria-haspopup="true">
            Service Areas
            <span class="nav-chevron" aria-hidden="true">&#9660;</span>
          </a>
          <ul class="nav-dropdown-menu" role="list">
            <?php foreach ($serviceAreas as $area): ?>
            <?php if (!empty($area['city'])): ?>
            <li>
              <a href="/service-area#<?php echo htmlspecialchars($area['slug']); ?>">
                <?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?>
              </a>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
            <li style="border-top:1px solid var(--color-gray-light); margin-top:4px; padding-top:4px;">
              <a href="/service-area"><strong>View Full Service Area</strong></a>
            </li>
          </ul>
        </li>

        <li>
          <a href="/about"
             <?php if (isActivePage('about')) echo 'aria-current="page"'; ?>>
            About
          </a>
        </li>

        <li>
          <a href="/contact"
             <?php if (isActivePage('contact')) echo 'aria-current="page"'; ?>>
            Contact
          </a>
        </li>

        <!-- Mobile-only CTA buttons (inside full-screen overlay) -->
        <li class="mobile-nav-cta" aria-hidden="true">
          <?php if (!empty($phone)): ?>
          <a href="<?php echo $_phoneHref; ?>" class="btn btn-accent">
            Call <?php echo htmlspecialchars($_phoneDisplay); ?>
          </a>
          <?php endif; ?>
          <a href="/contact" class="btn btn-outline-white">Free Estimate</a>
        </li>

      </ul><!-- /.nav-links -->

      <!-- ── Desktop CTA ────────────────────────────────────── -->
      <div class="header-cta">
        <?php if (!empty($phone)): ?>
        <a href="<?php echo $_phoneHref; ?>" class="btn btn-accent btn-sm">
          <?php echo htmlspecialchars($_phoneDisplay); ?>
        </a>
        <?php else: ?>
        <a href="/contact" class="btn btn-accent btn-sm">Free Estimate</a>
        <?php endif; ?>
      </div>

      <!-- ── Hamburger ──────────────────────────────────────── -->
      <button class="hamburger"
              aria-label="Open navigation menu"
              aria-expanded="false"
              aria-controls="nav-links">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div><!-- /.navbar-inner -->
  </nav>
</header>

<main id="main-content">
