<!-- CONTACT FORM -->
<section class="contact-section contact-form-section">
    <div class="contact-wrap">
        <div class="contact-form-header">
            <div class="contact-eyebrow">Send a Message</div>
            <h2>We'd love to <em>hear from you</em></h2>
        </div>
        <div class="contact-form-container">
            <form class="contact-form" method="POST" action="#">
                <div class="contact-form-row">
                    <div class="contact-form-group">
                        <label for="contact-name">Name</label>
                        <input type="text" id="contact-name" placeholder="Your full name" required>
                    </div>
                    <div class="contact-form-group">
                        <label for="contact-email">Email</label>
                        <input type="email" id="contact-email" placeholder="you@example.com" required>
                    </div>
                </div>
                <div class="contact-form-group">
                    <label for="contact-subject">Subject</label>
                    <input type="text" id="contact-subject" placeholder="What is this regarding?" required>
                </div>
                <div class="contact-form-group">
                    <label for="contact-message">Message</label>
                    <textarea id="contact-message" placeholder="Tell us more..." rows="5" required></textarea>
                </div>
                <button type="submit" class="contact-btn contact-btn-primary">Send Message</button>
                <p class="contact-form-note">This form mirrors Roha's live Zoho contact form — connect submissions to that endpoint when wiring this up.</p>
            </form>
        </div>
    </div>
</section>