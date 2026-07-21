<?php
/**
 * Twin Cities Towing INC — FAQ Page
 * Premium tier | v6.1/v6.2 standards | conversational AEO Q&A
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle       = 'Towing FAQs | Twin Cities Towing INC | Richmond, TX';
$pageDescription = 'Straight answers on towing costs, response times, flatbeds, lockouts, and insurance from Twin Cities Towing INC in Richmond, TX. Call (281) 935-1113 — 24/7.';
$ogImage         = $clientPhotos[5];
$currentPage     = 'faq';

// ── FAQ data — grouped by theme. Answers may contain inline links (stripped for schema). ──
$faqCategories = [
    [
        'id'    => 'pricing',
        'label' => 'Pricing & Payment',
        'icon'  => 'dollar',
        'intro' => 'Twin Cities Towing INC prices every job before the truck leaves the yard — here is how the numbers actually work.',
        'items' => [
            [
                'q' => 'How much does a tow cost in Richmond, TX?',
                'a' => 'Most standard local tows within Fort Bend County run $75–$125, and that covers the majority of calls we take. Flatbed transport adds about $25–$50 over wheel-lift for the same distance, motorcycle transport runs $85–$150, and commercial truck work starts around $125–$250+. Distance, vehicle type, and recovery difficulty set the final figure — dispatch confirms your exact price on the phone before a truck is assigned.',
            ],
            [
                'q' => 'Do you charge extra for nights, weekends, or holidays?',
                'a' => 'There is no blanket surcharge — our trucks run 24/7, and a 2 a.m. call is business as usual, not an upcharge excuse. Complicated after-hours recoveries can cost more than a routine daytime tow because of the equipment involved, but you hear the complete number before we roll. We never add fuel fees or mileage surprises after your vehicle is loaded. What dispatch quotes is what you pay.',
            ],
            [
                'q' => 'How do I pay, and can I get a receipt for reimbursement?',
                'a' => 'You pay when the job is done — we never ask for money up front just to dispatch a truck. Every tow comes with an itemized receipt showing mileage, service type, and time of call, which is exactly what insurance carriers and motor clubs ask for when you file for roadside reimbursement. Tell dispatch you plan to file a claim and we will document the job accordingly.',
            ],
        ],
    ],
    [
        'id'    => 'response',
        'label' => 'Response Times & Dispatch',
        'icon'  => 'clock',
        'intro' => 'Twin Cities Towing INC dispatches from 1920 Rocky Falls RD in Richmond, so the highways you break down on are the roads our drivers run every day.',
        'items' => [
            [
                'q' => 'How fast can you get to me on I-69 or the Grand Parkway?',
                'a' => 'Typically 20–40 minutes to most Richmond-area locations, and dispatch gives you a live ETA when you call — not a vague "someone is on the way." The US-59/I-69 corridor, SH-99 Grand Parkway, and FM 762 are our home routes, so we know which exits, turnarounds, and feeder roads reach you fastest. While you wait on a highway shoulder, stay belted inside the vehicle with your hazards on.',
            ],
            [
                'q' => 'Are you really open 24/7, or does a call center answer at night?',
                'a' => 'You reach our own dispatch around the clock — no overnight answering service reading a script from another state. Twin Cities Towing INC has run 24/7 since 2011, because dead batteries and blowouts do not keep office hours. Nights, weekends, and holidays get the same local dispatcher, the same trucks, and the same 20–40 minute target across most of Fort Bend County.',
            ],
            [
                'q' => 'What information should I have ready when I call?',
                'a' => 'Four things get a truck moving fastest: your location (cross street, mile marker, or a landmark like a gas station), your vehicle\'s make and model, whether it is AWD or 4WD, and where you want it taken. Not sure of your exact spot? Describe what you see and we will work it out — our drivers know Fort Bend County well enough to find you. The call takes about two minutes.',
            ],
        ],
    ],
    [
        'id'    => 'equipment',
        'label' => 'Equipment & Vehicle Types',
        'icon'  => 'truck',
        'intro' => 'Twin Cities Towing INC runs both flatbed and wheel-lift equipment, so the truck that shows up matches the vehicle it is picking up.',
        'items' => [
            [
                'q' => 'Will towing damage my AWD or four-wheel-drive vehicle?',
                'a' => 'Not on the right equipment. AWD and 4WD vehicles ride on our <a href="/services/flatbed-towing/">flatbed</a> with all four wheels off the pavement — dragging them behind a wheel-lift is what destroys transfer cases and differentials. Tell dispatch your drivetrain when you call and the correct truck is sent automatically. Not sure what your car has? Give us the make and model and we will check it for you.',
            ],
            [
                'q' => 'Can you tow a motorcycle without dropping or scratching it?',
                'a' => 'Yes. Bikes are secured with soft straps, wheel chocks, and frame-safe tie-down points — never clamps that crush bodywork. Local <a href="/services/motorcycle-towing/">motorcycle transport</a> typically runs $85–$150, and we move cruisers, sport bikes, scooters, and ATVs across Fort Bend County. If your bike went down, mention it — a dropped bike loads differently than one on its kickstand.',
            ],
            [
                'q' => 'How big a truck can you actually handle?',
                'a' => 'We tow box trucks, work trucks, delivery vehicles, and commercial rigs throughout the Richmond area — heavy-duty jobs typically start at $125–$250+ depending on size, distance, and whether recovery equipment is needed. If you are not sure your vehicle still counts as "light duty," call with the model or GVWR and we will dispatch the right rig. Details are on our <a href="/services/truck-towing/">truck towing</a> page.',
            ],
            [
                'q' => 'My car is lowered — will it clear your ramps?',
                'a' => 'Yes, with the right approach angle. Low-clearance, lowered, and luxury vehicles load onto our flatbed using extended-angle technique and ramp boards, so splitters and bumpers never scrape. Flatbed service costs about $25–$50 more than wheel-lift for the same distance — cheap insurance compared to a cracked front lip. Mention "lowered" or the model when you call and the driver comes prepared.',
            ],
        ],
    ],
    [
        'id'    => 'roadside',
        'label' => 'Roadside Help & Lockouts',
        'icon'  => 'wrench',
        'intro' => 'Twin Cities Towing INC fixes a lot of problems right on the shoulder — not every call has to end with a tow.',
        'items' => [
            [
                'q' => 'I locked my keys in the car. Can you get in without breaking anything?',
                'a' => 'Yes. We use air wedges and long-reach tools — the same damage-free method dealerships use — and most vehicles are open within 5–15 minutes of our arrival. No broken windows, no scratched paint, no drilled locks. <a href="/services/lockout-service/">Lockout service</a> runs 24/7 across the Richmond area, because keys get locked in cars at midnight just as often as at noon.',
            ],
            [
                'q' => 'I have a flat tire but no spare. What are my options?',
                'a' => 'If you have a usable spare, we mount it on the spot with our <a href="/services/tire-change/">tire change service</a> and you drive away. No spare? We tow you to the tire shop of your choice — a standard local tow runs $75–$125. Either way, do not attempt a shoulder-side change next to US-59 traffic; that is how people get hurt. Call, stay in the vehicle, and let us handle it.',
            ],
            [
                'q' => 'Do you do jump starts and fuel delivery?',
                'a' => 'Yes — jump starts, fuel delivery, and minor shoulder-side fixes are all part of our <a href="/services/roadside-assistance/">roadside assistance</a>, typically reaching you in 20–35 minutes. If the battery takes a charge, you are back on the road for far less than the cost of a tow. If it will not hold one, we take the car to a shop you pick instead of leaving you stranded twice.',
            ],
        ],
    ],
    [
        'id'    => 'accidents',
        'label' => 'Accidents, Insurance & Coverage Area',
        'icon'  => 'map',
        'intro' => 'Twin Cities Towing INC covers Fort Bend County end to end, and accident calls get priority dispatch.',
        'items' => [
            [
                'q' => 'I was just in an accident. What should I do first?',
                'a' => 'Safety first: if the car drives, move it to the shoulder, turn on your hazards, and call 911 if anyone is hurt. Then call us at (281) 935-1113 — <a href="/services/accident-towing/">accident towing</a> runs 24/7 and we work alongside Fort Bend County responders to clear scenes safely. We photograph your vehicle before loading and deliver it to the body shop or storage location you choose, not one chosen for you.',
            ],
            [
                'q' => 'Will my insurance pay for the tow?',
                'a' => 'Often, yes. Most policies with roadside or towing coverage reimburse you after the fact, and collision claims from an accident usually cover the tow from the scene. We give you an itemized receipt with mileage, timestamps, and service details — everything your adjuster asks for. Check your policy or insurer\'s app for "roadside assistance" coverage; if you are unsure, keep the receipt and let the insurer decide.',
            ],
            [
                'q' => 'Which cities do you actually cover?',
                'a' => 'Richmond, Rosenberg, Sugar Land, Missouri City, Stafford, Katy, Greatwood, Pecan Grove, Needville, and Fresno — essentially all of Fort Bend County, plus the US-59/I-69, SH-99 Grand Parkway, and FM 762 corridors that connect them. See the full <a href="/service-area/">service area</a> for details. A few miles outside those lines? Call anyway — if a truck can reach you in reasonable time, we will send one.',
            ],
        ],
    ],
];

// ── Schema: BreadcrumbList + FAQPage mirroring the visible Q&As exactly ──────
$allFaqs = [];
foreach ($faqCategories as $cat) {
    foreach ($cat['items'] as $item) {
        $allFaqs[] = ['q' => $item['q'], 'a' => strip_tags($item['a'])];
    }
}

$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $domain],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'FAQ'],
        ]],
        generateFAQSchema($allFaqs),
    ],
];

// ── Inline SVG icons (v6.2 — no runtime injection) ───────────────────────────
$faqIcons = [
    'dollar' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="2" x2="12" y2="22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
    'clock'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
    'truck'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>',
    'wrench' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
    'map'    => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>',
];
$plusIcon  = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5v14"/></svg>';
$phoneIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>';
$helpIcon  = '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<style>
/* ════════════════════════════════════════════════════════════════════
   FAQ PAGE — Twin Cities Towing INC (page-specific styles)
   Premium tier | var() tokens only
   Techniques: layered hero (gradient + noise), 2 SVG divider styles,
   asymmetric sticky-rail layout, tinted category cards, floating
   accents (4–8% opacity), Caveat accent subtitle, mixed reveal
   directions, accordion micro-interactions, signature checklist
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO — layered: photo, gradient overlay (::before), noise (::after) ── */
.faqp-hero {
  position: relative;
  min-height: 52vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo htmlspecialchars($clientPhotos[5]); ?>');
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
}
.faqp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    115deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.82) 48%,
    rgba(var(--color-secondary-rgb), 0.62) 100%
  );
  z-index: 1;
}
.faqp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  background-size: 220px 220px;
  z-index: 2;
  pointer-events: none;
}
.faqp-hero-float {
  position: absolute;
  top: -110px;
  right: -90px;
  width: 420px;
  height: 420px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle, color-mix(in srgb, var(--color-accent) 8%, transparent) 0%, transparent 68%);
  z-index: 2;
  pointer-events: none;
  animation: faqp-drift 11s ease-in-out infinite alternate;
}
@keyframes faqp-drift {
  from { transform: translate3d(0, 0, 0); }
  to   { transform: translate3d(-26px, 22px, 0); }
}
.faqp-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-16) 0 var(--space-12);
}
.faqp-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.55);
  margin-bottom: var(--space-6);
}
.faqp-breadcrumb a {
  color: rgba(255,255,255,0.78);
}
.faqp-breadcrumb a:hover {
  color: var(--color-accent);
}
.faqp-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-4);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  background: color-mix(in srgb, var(--color-accent) 14%, transparent);
  color: var(--color-accent);
  border-radius: var(--radius-full);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-bottom: var(--space-6);
}
.faqp-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.6vw, 3.4rem);
  max-width: 15ch;
  text-wrap: balance;
  margin-bottom: var(--space-5);
}
.faqp-hero h1 .faqp-accent-word {
  color: var(--color-accent);
}
.faqp-hero .hero-answer {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  max-width: 58ch;
  margin-bottom: var(--space-8);
}
.faqp-hero-btns {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
}

/* ── DIVIDER STYLE 1 — soft double curve out of the hero ───────────── */
.faqp-divider-curve {
  display: block;
  line-height: 0;
  margin-top: -1px;
  background: transparent;
}
.faqp-divider-curve svg {
  display: block;
  width: 100%;
  height: 64px;
}

/* ── MAIN SHELL — asymmetric sticky-rail layout ────────────────────── */
.faqp-main {
  background: var(--color-light);
  padding: var(--space-12) 0 var(--space-16);
  position: relative;
}
.faqp-shell {
  display: grid;
  grid-template-columns: 264px minmax(0, 1fr);
  gap: var(--space-12);
  align-items: start;
}

/* Section heading over the shell */
.faqp-intro {
  max-width: 60ch;
  margin-bottom: var(--space-10);
}
.faqp-intro .eyebrow-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.faqp-intro h2 {
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.faqp-subtitle {
  display: block;
  font-family: var(--font-accent);
  font-size: clamp(1.35rem, 2.4vw, 1.7rem);
  color: var(--color-secondary);
  transform: rotate(-1.2deg);
  margin-bottom: var(--space-3);
}
.faqp-intro p {
  color: var(--color-gray);
  max-width: 58ch;
}

/* ── RAIL — jump nav + call card ───────────────────────────────────── */
.faqp-rail {
  position: sticky;
  top: calc(84px + var(--space-6));
}
.faqp-rail-nav {
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-lg);
  padding: var(--space-5);
  box-shadow: var(--shadow-sm);
  margin-bottom: var(--space-5);
}
.faqp-rail-nav h2 {
  font-size: var(--font-size-sm);
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-gray);
  margin-bottom: var(--space-4);
}
.faqp-rail-nav ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-1);
}
.faqp-rail-nav a {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-2) var(--space-3);
  border-radius: var(--radius-md);
  border-left: 3px solid transparent;
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-gray-dark);
  transition: all var(--transition-fast);
}
.faqp-rail-nav a:hover {
  background: color-mix(in srgb, var(--color-accent) 9%, transparent);
  border-left-color: var(--color-accent);
  color: var(--color-primary);
  transform: translateX(2px);
}
.faqp-rail-nav a svg {
  flex-shrink: 0;
  color: var(--color-accent);
}
.faqp-rail-call {
  background: linear-gradient(150deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  position: relative;
  overflow: hidden;
}
.faqp-rail-call::after {
  content: '';
  position: absolute;
  bottom: -70px;
  right: -70px;
  width: 190px;
  height: 190px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle, color-mix(in srgb, var(--color-accent) 7%, transparent) 0%, transparent 70%);
  pointer-events: none;
}
.faqp-rail-call p {
  color: rgba(255,255,255,0.72);
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-4);
}
.faqp-rail-call strong {
  display: block;
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
}
.faqp-rail-call .btn {
  width: 100%;
  justify-content: center;
}

/* ── CATEGORY BLOCKS — tinted card rotation ────────────────────────── */
.faqp-cat {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  margin-bottom: var(--space-10);
  border: 1px solid var(--color-gray-light);
  scroll-margin-top: calc(84px + var(--space-6));
}
.faqp-cat:last-child {
  margin-bottom: 0;
}
.faqp-cat--t1 { background: rgba(var(--color-primary-rgb), 0.04); }
.faqp-cat--t2 { background: color-mix(in srgb, var(--color-accent) 5%, var(--color-white)); }
.faqp-cat--t3 { background: rgba(var(--color-secondary-rgb), 0.06); }
.faqp-cat-header {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  margin-bottom: var(--space-3);
}
.faqp-cat-icon {
  flex-shrink: 0;
  width: 46px;
  height: 46px;
  border-radius: var(--radius-md);
  background: var(--color-primary);
  color: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-md);
}
.faqp-cat-header h2 {
  font-size: clamp(1.25rem, 2.4vw, 1.6rem);
  text-wrap: balance;
  margin: 0;
}
.faqp-cat-intro {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  max-width: 62ch;
  margin-bottom: var(--space-6);
  padding-left: calc(46px + var(--space-4));
}

/* ── ACCORDION ─────────────────────────────────────────────────────── */
.faqp-cat .faq-accordion {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.faqp-cat .faq-item {
  display: block;
  padding: 0;
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: box-shadow var(--transition-base), border-color var(--transition-base);
}
.faqp-cat .faq-item:hover {
  box-shadow: var(--shadow-md);
}
.faqp-cat .faq-item[open] {
  border-color: color-mix(in srgb, var(--color-accent) 45%, var(--color-gray-light));
  box-shadow: var(--shadow-card);
}
.faqp-cat .faq-question {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-5);
  padding: var(--space-5) var(--space-6);
  cursor: pointer;
  list-style: none;
  transition: background var(--transition-fast);
}
.faqp-cat .faq-question::-webkit-details-marker {
  display: none;
}
.faqp-cat .faq-question:hover {
  background: rgba(var(--color-primary-rgb), 0.03);
}
.faqp-cat .faq-question h3 {
  font-size: var(--font-size-base);
  line-height: 1.4;
  margin: 0;
  text-wrap: balance;
  color: var(--color-primary);
}
.faqp-cat .faq-toggle {
  flex-shrink: 0;
  width: 30px;
  height: 30px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-primary-rgb), 0.07);
  color: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform var(--transition-base), background var(--transition-base), color var(--transition-base);
}
.faqp-cat .faq-item[open] .faq-toggle {
  background: var(--color-accent);
  color: var(--color-white);
  transform: rotate(45deg);
}
.faqp-cat .faq-answer {
  padding: 0 var(--space-6) var(--space-6);
  border-top: 1px dashed var(--color-gray-light);
  padding-top: var(--space-5);
  margin: 0 0;
}
.faqp-cat .faq-answer p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.8;
  max-width: 65ch;
  margin: 0;
}
.faqp-cat .faq-answer a {
  color: var(--color-accent);
  font-weight: 600;
  text-decoration: underline;
  text-underline-offset: 3px;
}
.faqp-cat .faq-answer a:hover {
  color: var(--color-primary);
}

/* ── MIXED REVEAL DIRECTIONS (page-specific variants) ──────────────── */
[data-animate="drift-left"]  { transform: translateX(-42px); }
[data-animate="drift-right"] { transform: translateX(42px); }
[data-animate="pop"]         { transform: scale(0.94); }

/* ── DIVIDER STYLE 2 — angled slice into the signature section ─────── */
.faqp-divider-angle {
  display: block;
  line-height: 0;
  background: var(--color-light);
}
.faqp-divider-angle svg {
  display: block;
  width: 100%;
  height: 72px;
}

/* ── SIGNATURE SECTION — "While You Wait" shoulder checklist ───────── */
.faqp-wait {
  background: var(--color-primary-dark);
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.faqp-wait::before {
  content: '';
  position: absolute;
  top: -140px;
  left: -110px;
  width: 460px;
  height: 460px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle, color-mix(in srgb, var(--color-accent) 6%, transparent) 0%, transparent 66%);
  pointer-events: none;
  animation: faqp-drift 13s ease-in-out infinite alternate-reverse;
}
.faqp-wait-header {
  max-width: 62ch;
  margin-bottom: var(--space-10);
}
.faqp-wait-header .eyebrow-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.faqp-wait-header h2 {
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.faqp-wait-header p {
  color: rgba(255,255,255,0.68);
  margin: 0;
}
.faqp-wait-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  position: relative;
  z-index: 1;
}
.faqp-wait-step {
  position: relative;
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-5) var(--space-6);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.faqp-wait-step:hover {
  transform: translateY(-4px);
  border-color: color-mix(in srgb, var(--color-accent) 50%, transparent);
}
/* staggered offsets — deliberately uneven rhythm */
.faqp-wait-step:nth-child(even) {
  margin-top: var(--space-6);
}
.faqp-wait-num {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 700;
  line-height: 1;
  color: transparent;
  -webkit-text-stroke: 1.5px color-mix(in srgb, var(--color-accent) 65%, transparent);
  display: block;
  margin-bottom: var(--space-4);
}
.faqp-wait-step h3 {
  color: var(--color-white);
  font-size: var(--font-size-base);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.faqp-wait-step p {
  color: rgba(255,255,255,0.62);
  font-size: var(--font-size-sm);
  line-height: 1.7;
  margin: 0;
}

/* ── CTA BANNER ────────────────────────────────────────────────────── */
.faqp-cta {
  background: var(--color-light);
  padding: var(--space-16) 0;
}
.faqp-cta-card {
  background: linear-gradient(120deg, var(--color-primary) 0%, var(--color-primary-dark) 78%);
  border-radius: var(--radius-xl);
  padding: var(--space-12) var(--space-10);
  display: grid;
  grid-template-columns: minmax(0, 1.4fr) auto;
  gap: var(--space-10);
  align-items: center;
  position: relative;
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.faqp-cta-card::before {
  content: '';
  position: absolute;
  top: -90px;
  right: 18%;
  width: 320px;
  height: 320px;
  border-radius: var(--radius-full);
  background: radial-gradient(circle, color-mix(in srgb, var(--color-accent) 8%, transparent) 0%, transparent 70%);
  pointer-events: none;
}
.faqp-cta-card h2 {
  color: var(--color-white);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.faqp-cta-card h2 .faqp-accent-word {
  color: var(--color-accent);
}
.faqp-cta-card p {
  color: rgba(255,255,255,0.72);
  max-width: 52ch;
  margin: 0;
}
.faqp-cta-btns {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  position: relative;
  z-index: 1;
}

/* ── RESPONSIVE ────────────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .faqp-shell {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .faqp-rail {
    position: static;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-5);
    align-items: stretch;
  }
  .faqp-rail-nav {
    margin-bottom: 0;
  }
  .faqp-wait-steps {
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 768px) {
  .faqp-hero {
    min-height: 46vh;
  }
  .faqp-rail {
    grid-template-columns: 1fr;
  }
  .faqp-cat {
    padding: var(--space-6) var(--space-5);
  }
  .faqp-cat-intro {
    padding-left: 0;
  }
  .faqp-cta-card {
    grid-template-columns: 1fr;
    padding: var(--space-8) var(--space-6);
  }
  .faqp-cta-btns {
    flex-direction: row;
    flex-wrap: wrap;
  }
}
@media (max-width: 480px) {
  .faqp-wait-steps {
    grid-template-columns: 1fr;
  }
  .faqp-wait-step:nth-child(even) {
    margin-top: 0;
  }
  .faqp-cat .faq-question {
    padding: var(--space-4) var(--space-4);
  }
  .faqp-cat .faq-answer {
    padding: var(--space-4);
    padding-top: var(--space-4);
  }
}
@media (prefers-reduced-motion: reduce) {
  .faqp-hero-float,
  .faqp-wait::before {
    animation: none;
  }
}
</style>

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section class="faqp-hero" aria-labelledby="faq-hero-heading">
  <div class="faqp-hero-float" aria-hidden="true"></div>
  <div class="faqp-hero-inner container">
    <nav class="faqp-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span aria-hidden="true">&rsaquo;</span>
      <span aria-current="page">FAQ</span>
    </nav>
    <span class="faqp-hero-eyebrow"><?php echo $helpIcon; ?> Answered by Our Dispatchers</span>
    <h1 id="faq-hero-heading">Towing Questions, <span class="faqp-accent-word">Answered Straight</span></h1>
    <p class="hero-answer">Everything Fort Bend County drivers ask us about towing costs, response times, flatbeds, lockouts, and insurance — answered by the same people who pick up the phone at 2 a.m. No runaround, real numbers.</p>
    <div class="faqp-hero-btns">
      <a href="tel:2819351113" class="btn btn-accent btn-lg"><?php echo $phoneIcon; ?> Call (281) 935-1113</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Request Service Online</a>
    </div>
  </div>
</section>

<!-- Divider style 1: layered curve -->
<div class="faqp-divider-curve" aria-hidden="true" style="background: var(--color-primary-dark);">
  <svg viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C280,64 560,0 840,26 C1100,50 1300,18 1440,34 L1440,64 L0,64 Z" fill="var(--color-light)" opacity="0.45"/>
    <path d="M0,38 C320,72 640,14 960,40 C1180,58 1330,34 1440,46 L1440,64 L0,64 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ══════════════════════════ FAQ MAIN SHELL ══════════════════════════ -->
<section class="faqp-main" aria-label="Frequently asked towing questions">
  <div class="container">

    <div class="faqp-intro" data-animate="fade-up">
      <span class="eyebrow-label">Common Questions</span>
      <h2>What do Richmond drivers ask us most?</h2>
      <span class="faqp-subtitle">straight answers, no runaround</span>
      <p>Sixteen real questions from thirteen years of dispatch calls — grouped so you can jump straight to pricing, response times, equipment, roadside help, or coverage.</p>
    </div>

    <div class="faqp-shell">

      <!-- Sticky rail: jump nav + call card -->
      <aside class="faqp-rail" aria-label="FAQ topics">
        <nav class="faqp-rail-nav">
          <h2>Jump to a Topic</h2>
          <ul data-p1-dynamic>
            <?php foreach ($faqCategories as $cat): ?>
            <li>
              <a href="#faq-<?php echo htmlspecialchars($cat['id']); ?>">
                <?php echo $faqIcons[$cat['icon']]; ?>
                <?php echo htmlspecialchars($cat['label']); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <div class="faqp-rail-call">
          <strong>Question not listed?</strong>
          <p>Dispatch answers 24/7 — ask a person, not a page.</p>
          <a href="tel:2819351113" class="btn btn-accent"><?php echo $phoneIcon; ?> (281) 935-1113</a>
        </div>
      </aside>

      <!-- Category blocks -->
      <div data-p1-dynamic>
        <?php foreach ($faqCategories as $i => $cat): ?>
        <section class="faqp-cat faqp-cat--t<?php echo ($i % 3) + 1; ?>"
                 id="faq-<?php echo htmlspecialchars($cat['id']); ?>"
                 data-animate="<?php echo ['fade-up', 'drift-left', 'fade-up', 'drift-right', 'fade-up'][$i % 5]; ?>"
                 aria-labelledby="faq-cat-h-<?php echo htmlspecialchars($cat['id']); ?>">
          <div class="faqp-cat-header">
            <span class="faqp-cat-icon" aria-hidden="true"><?php echo $faqIcons[$cat['icon']]; ?></span>
            <h2 id="faq-cat-h-<?php echo htmlspecialchars($cat['id']); ?>"><?php echo htmlspecialchars($cat['label']); ?></h2>
          </div>
          <p class="faqp-cat-intro"><?php echo htmlspecialchars($cat['intro']); ?></p>
          <div class="faq-accordion" data-p1-dynamic>
            <?php foreach ($cat['items'] as $j => $item): ?>
            <details class="faq-item"<?php if ($j === 0) echo ' open'; ?>>
              <summary class="faq-question">
                <h3><?php echo htmlspecialchars($item['q']); ?></h3>
                <span class="faq-toggle" aria-hidden="true"><?php echo $plusIcon; ?></span>
              </summary>
              <div class="faq-answer">
                <p><?php echo $item['a']; ?></p>
              </div>
            </details>
            <?php endforeach; ?>
          </div>
        </section>
        <?php endforeach; ?>
      </div>

    </div><!-- /.faqp-shell -->
  </div>
</section>

<!-- Divider style 2: angled slice -->
<div class="faqp-divider-angle" aria-hidden="true">
  <svg viewBox="0 0 1440 72" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,72 1440,0 1440,72" fill="var(--color-primary-dark)"/>
    <polygon points="0,72 1440,26 1440,44" fill="var(--color-accent)" opacity="0.35"/>
  </svg>
</div>

<!-- ═══════════════ SIGNATURE SECTION — While You Wait ═════════════════ -->
<section class="faqp-wait" aria-labelledby="faq-wait-heading">
  <div class="container">
    <div class="faqp-wait-header" data-animate="drift-left">
      <span class="eyebrow-label">Shoulder Safety</span>
      <h2 id="faq-wait-heading">What should I do while I wait for the truck?</h2>
      <p>Our drivers reach most Richmond-area breakdowns in 20&ndash;40 minutes. Here is how to spend that time safely — especially on the I-69 and Grand Parkway shoulders, where passing traffic is the real hazard.</p>
    </div>
    <div class="faqp-wait-steps">
      <div class="faqp-wait-step" data-animate="pop">
        <span class="faqp-wait-num" aria-hidden="true">01</span>
        <h3>Get out of the travel lane</h3>
        <p>If the car still moves, coast onto the shoulder, a feeder road, or a parking lot. Distance from live traffic matters more than a perfect spot.</p>
      </div>
      <div class="faqp-wait-step" data-animate="pop">
        <span class="faqp-wait-num" aria-hidden="true">02</span>
        <h3>Hazards on, stay belted</h3>
        <p>Turn on your flashers and stay inside with your seatbelt fastened. Never stand on the traffic side of the vehicle on a highway shoulder.</p>
      </div>
      <div class="faqp-wait-step" data-animate="pop">
        <span class="faqp-wait-num" aria-hidden="true">03</span>
        <h3>Pin down your location</h3>
        <p>Note a cross street, mile marker, exit number, or a landmark like a gas station. The more precise the location, the faster the truck finds you.</p>
      </div>
      <div class="faqp-wait-step" data-animate="pop">
        <span class="faqp-wait-num" aria-hidden="true">04</span>
        <h3>Verify it&rsquo;s our truck</h3>
        <p>Wait for the amber lights and confirm it&rsquo;s Twin Cities Towing INC before rolling your window down. Dispatch can describe the truck we sent.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════ CTA BANNER ═════════════════════════════ -->
<section class="faqp-cta" aria-labelledby="faq-cta-heading">
  <div class="container">
    <div class="faqp-cta-card" data-animate="fade-up">
      <div>
        <h2 id="faq-cta-heading">Still stuck? <span class="faqp-accent-word">One call fixes that.</span></h2>
        <p>Twin Cities Towing INC has answered Fort Bend County&rsquo;s breakdown calls since 2011 — one dispatcher, a real ETA, and a firm price before the truck rolls. Reach us any hour at 1920 Rocky Falls RD, Richmond, TX.</p>
      </div>
      <div class="faqp-cta-btns">
        <a href="tel:2819351113" class="btn btn-accent btn-lg"><?php echo $phoneIcon; ?> Call (281) 935-1113</a>
        <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
