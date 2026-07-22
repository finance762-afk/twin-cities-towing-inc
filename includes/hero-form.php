<?php
/**
 * Twin Cities Towing INC — Hero Contact Form Partial
 *
 * Reusable hero lead capture form (v6.1 hero default CTA).
 * This form uses Formsubmit.co with TCPA consent checkboxes.
 *
 * Include this in hero sections that use the form-right layout.
 */

// Load config if not already loaded
if (!isset($siteName)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}

// Form action from build-plan.json (via config.php if available)
$formAction = 'https://db.pageone.cloud/functions/v1/leads/twin-cities-towing-inc';
$thankYouUrl = $domain . '/thank-you/';
?>

<div class="hero-form-card">
  <h3>Get a Free Quote</h3>
  <p>Fill out the form below and we'll get back to you right away with pricing and availability.</p>

  <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">

    <!-- Honeypot (hidden spam trap) -->
    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

    <!-- Formsubmit.co directives -->
    <input type="hidden" name="_next" value="<?php echo htmlspecialchars($thankYouUrl); ?>">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_subject" value="New lead from <?php echo htmlspecialchars($siteName); ?>">
    <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

    <!-- Consent tracking -->
    <input type="hidden" name="consent_version" value="v2.1">
    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

    <!-- Form Fields -->
    <div class="form-field">
      <label for="hero-name">Your Name <span class="required-star">*</span></label>
      <input type="text" name="name" id="hero-name" required placeholder="John Smith">
    </div>

    <div class="form-field">
      <label for="hero-phone">Phone Number <span class="required-star">*</span></label>
      <input type="tel" name="phone" id="hero-phone" required placeholder="(555) 123-4567">
    </div>

    <div class="form-field">
      <label for="hero-email">Email <span class="required-star">*</span></label>
      <input type="email" name="email" id="hero-email" required placeholder="john@example.com">
    </div>

    <div class="form-field">
      <label for="hero-service">Service Needed</label>
      <select name="service" id="hero-service">
        <option value="">Select a service</option>
        <option value="Emergency Towing">Emergency Towing</option>
        <option value="Flatbed Towing">Flatbed Towing</option>
        <option value="Roadside Assistance">Roadside Assistance</option>
        <option value="Car Towing">Car Towing</option>
        <option value="Motorcycle Towing">Motorcycle Towing</option>
        <option value="Lockout Service">Lockout Service</option>
        <option value="Tire Change">Tire Change</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div class="form-field">
      <label for="hero-message">Additional Details</label>
      <textarea name="message" id="hero-message" rows="3" placeholder="Tell us about your situation..."></textarea>
    </div>

    <!-- TCPA Consent Checkboxes (v6.1 — separate, unbundled) -->
    <fieldset class="form-consent-fieldset">
      <legend class="form-consent-legend">Communication Consent</legend>

      <label class="form-consent-item">
        <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
        <span class="consent-label">
          <strong>Email updates (optional):</strong> I agree to receive emails from
          <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, promotions, and news.
          I can unsubscribe anytime. Message frequency varies.
        </span>
      </label>

      <label class="form-consent-item">
        <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
        <span class="consent-label">
          <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
          <?php echo htmlspecialchars($siteName); ?> at the phone number I provided.
          Message and data rates may apply. Reply STOP to unsubscribe.
          <strong>Consent is not a condition of purchase.</strong>
        </span>
      </label>

      <label class="form-consent-item form-consent-required">
        <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
        <span class="consent-label">
          I have read and agree to the
          <a href="/privacy-policy/">Privacy Policy</a>
          and
          <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
        </span>
      </label>

    </fieldset>

    <!-- spam shield: signed render timestamp + JS interaction signal -->
    <?php $__ft_ts = (string) time(); ?>
    <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
    <input type="hidden" name="_js" value="" class="js-shield-field">
    <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
    <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
    <?php } ?>
    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: var(--space-4);">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
        <polyline points="14 2 14 8 20 8"/>
        <line x1="16" y1="13" x2="8" y2="13"/>
        <line x1="16" y1="17" x2="8" y2="17"/>
        <polyline points="10 9 9 9 8 9"/>
      </svg>
      Get Your Free Quote
    </button>

  </form>
</div>

<style>
/* Hero Form Inline Styles */
.hero-form .form-field {
  margin-bottom: var(--space-5);
}
.hero-form label {
  display: block;
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-2);
  font-size: var(--font-size-sm);
}
.hero-form input,
.hero-form select,
.hero-form textarea {
  width: 100%;
  padding: var(--space-3);
  border: 2px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-dark);
  transition: border-color var(--transition-base);
}
.hero-form input:focus,
.hero-form select:focus,
.hero-form textarea:focus {
  outline: none;
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.1);
}
.hero-form textarea {
  resize: vertical;
  min-height: 80px;
}
.required-star {
  color: var(--color-danger);
  font-weight: 700;
}

/* Consent fieldset */
.form-consent-fieldset {
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  padding: var(--space-4);
  margin: var(--space-5) 0;
}
.form-consent-legend {
  font-weight: 700;
  color: var(--color-primary);
  font-size: var(--font-size-sm);
  padding: 0 var(--space-2);
}
.form-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  margin-bottom: var(--space-4);
  cursor: pointer;
}
.form-consent-item:last-child {
  margin-bottom: 0;
}
.form-consent-item.form-consent-required {
  background: rgba(239, 68, 68, 0.03);
  padding: var(--space-3);
  border-radius: var(--radius-sm);
  border: 1px solid rgba(239, 68, 68, 0.1);
}
.consent-checkbox {
  width: 18px;
  height: 18px;
  margin-top: 2px;
  flex-shrink: 0;
  cursor: pointer;
  accent-color: var(--color-accent);
}
.consent-label {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  line-height: 1.5;
}
.consent-label strong {
  color: var(--color-primary);
  font-weight: 600;
}
.consent-label a {
  color: var(--color-accent);
  text-decoration: underline;
}
.consent-label a:hover {
  color: var(--color-primary);
}
</style>
