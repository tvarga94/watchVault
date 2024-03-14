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
                            <!--  <h3>Partners</h3>
                              <div class="textwidget">
                                  <p>
                                      <a href="http://www.gphg.org/" target="_blank" rel="noopener">
                                          <noscript>
                                              <img src="https://monochrome-watches.com/wp-content/uploads/2018/04/LOGO-GPHG-FONDATION-NEG.png"
                                                   width="150" height="120" alt="GPHG" />
                                          </noscript>
                                          <img src="https://monochrome-watches.com/wp-content/uploads/2018/04/LOGO-GPHG-FONDATION-NEG.png"
                                               data-src="https://monochrome-watches.com/wp-content/uploads/2018/04/LOGO-GPHG-FONDATION-NEG.png"
                                               width="150" height="120" alt="GPHG"
                                               class="lazy-images img-responsive lazy-images--loaded"
                                               data-ll-status="loaded">
                                      </a>
                                  </p>
                              </div> -->
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
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134157"><a
                                href="https://monochrome-watches.com/privacy-policy-of-monochrome-watches-com/">Privacy
                                policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting the traditional way.

            var formData = new FormData(this);

            // Adjust the fetch URL as necessary. Make sure it matches your Laravel route.
            fetch('/newsletter/store', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF token is included.
                }
            })
                .then(response => response.json()) // Convert response to JSON.
                .then(data => {
                    console.log('Success:', data);

                    // Display success message.
                    var messageDiv = document.getElementById('subscriptionMessage');
                    messageDiv.style.display = 'block'; // Make the message visible.
                    messageDiv.textContent = 'Successful subscription! Thank you for subscribing.'; // Update with your message.

                    // Clear the form fields.
                    document.getElementById('newsletterForm').reset();

                    // Hide the success message after 2 seconds.
                    setTimeout(function() {
                        messageDiv.style.display = 'none'; // Hide the message.
                    }, 3000); // 3000 milliseconds = 3 seconds
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Optionally, handle errors and display an error message.
                });
        });
    });
</script>

