<footer class="footer push-element">
    <form id="newsletterForm" action="/newsletter/store" method="POST">
        <div id="subscriptionMessage" style="display: none; color: green; margin-top: 10px;text-align: center;font-size: large"></div>
        @csrf
        <div class="footer_container">
            <h4>Stay up to date with the latest post and updates</h4>
            <h2>Subscribe to our Newsletter</h2>
        </div>
        <div class="holder">
            <input type="text" placeholder="Name" name="name" required>
            <input type="text" placeholder="Email address" name="email" required>
            <label class="checkbox-container">
                <input type="checkbox" checked="checked" name="subscribe" required> I agree to my personal data being stored and used to receive the newsletter or other updates about Watch Vault.
            </label>
        </div>
        <div class="holder">
            <input type="submit" value="Subscribe">
        </div>
    </form>
    <div class="container container--wide">
        <div class="frame footer__content-frame">
            <div>

            </div>
            <div>
                <div class="frame">
                    <div>
                        <section class="widget nav_menu-2 widget_nav_menu">
                            <h3>MENU</h3>
                            <ul id="menu-footermenu" class="menu">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134196">
                                    <a href="https://monochrome-watches.com/about/">Brands</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134189">
                                    <a href="https://monochrome-watches.com/masthead/">Classes</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137349">
                                    <a href="https://monochrome-watches.com/our-story/">Movement</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187941">
                                    <a href="https://monochrome-watches.com/jobs/">Functionality</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187941">
                                    <a href="https://monochrome-watches.com/jobs/">Style</a></li>
                            </ul>
                        </section>
                    </div>
                    <div>
                        <section class="widget nav_menu-4 widget_nav_menu">
                            <h3>CONTACT</h3>
                            <ul id="menu-contact-menu" class="menu">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137350">
                                    <a href="{{ route('about') }}">About Us</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137350">
                                    <a href="{{ route('contact') }}">Contact Us</a></li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137351">
                                    <a href="{{ route('advertising') }}">Advertising</a></li>
                            </ul>
                        </section>
                    </div>
                    <div>
                        <section class="widget nav_menu-3 widget_nav_menu">
                            <h3>SOCIAL MEDIA</h3>
                            <ul id="menu-follow" class="menu">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134146">
                                    <a href="https://www.tiktok.com/@thewatchvault_official">Tiktok</a></li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134149">
                                    <a href="https://youtube.com/@thewatchvault_official">Youtube</a></li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134148">
                                    <a title="Pinterest" href="https://pin.it/3B2TkrumK">Pinterest</a></li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134147">
                                    <a title="Instagram" href="https://pin.it/3B2TkrumK">Instagram</a></li>
                            </ul>
                        </section>
                    </div>
                    <div>
                        <section class="widget text-104 widget_text">
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="frame footer__copyright-frame">
            <div>
                <div class="footer__copyright">
                    © 2024 THE WATCH VAULT
                    <span class="footer__sep">|</span>
                    <ul id="menu-privacy-menu" class="footer-privacy-menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134157"><a href="https://monochrome-watches.com/privacy-policy-of-monochrome-watches-com/">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            fetch('/newsletter/store', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);

                    var messageDiv = document.getElementById('subscriptionMessage');
                    messageDiv.style.display = 'block';
                    messageDiv.textContent = 'Successful subscription! Thank you for subscribing.';

                    document.getElementById('newsletterForm').reset();

                    setTimeout(function() {
                        messageDiv.style.display = 'none';
                    }, 3000);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>

