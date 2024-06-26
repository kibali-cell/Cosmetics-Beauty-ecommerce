  <!--DOCTYPE html-->
  <html lang="en">
    <head>
        
        @include('home.css')

    </head>
    <body>
    
@include('home.header')



        
    
<!-- ============================================ -->
<!--                   Contact                    -->
<!-- ============================================ -->

<section id="contact-1441">
    <div class="cs-container">
        <div class="cs-content">
            <span class="cs-topper">Contact Us</span>
            <h2 class="cs-title">We Love to Hear From Our Happy Customers</h2>
        </div>
        <div class="cs-contact-group">
            <!-- <p class="cs-text">
                There are many variations of passages of available but the majority have suffered alteration in some form, by injected randomized words even slightly believable.
            </p> -->
            <ul class="cs-ul">
                <li class="cs-li">
                    <picture class="cs-icon-wrapper">
                        <img aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/phone-yellow.svg" alt="phone icon" class="cs-icon" width="40" height="40" decoding="async">
                    </picture>
                    <div class="cs-flex-group">
                        <span class="cs-header">Phone</span>
                        <a href="tel:888-4565-789
                        " class="cs-link">+1 (888) 4565 789
                        </a>
                    </div>
                </li>
                <li class="cs-li">
                    <picture class="cs-icon-wrapper">
                        <img aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/pin-yellow.svg" alt="address icon" class="cs-icon" width="40" height="40" decoding="async">
                    </picture>
                    <div class="cs-flex-group">
                        <span class="cs-header">Address</span>
                        <a href="mailto:Email@stitch.com" class="cs-link">121 King St, Melbourne, Australia</a>
                    </div>
                </li>
            </ul>
            <picture class="cs-background">
                <!--Mobile Image-->
                <source media="(max-width: 600px)" srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Landscapes/wind-turbine.jpg">
                <!--Tablet and above Image-->
                <source media="(min-width: 601px)" srcset="https://images.unsplash.com/photo-1594465919760-441fe5908ab0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bWFrZXVwfGVufDB8fDB8fHww">
                <img loading="lazy" decoding="async" src="https://images.unsplash.com/photo-1594465919760-441fe5908ab0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bWFrZXVwfGVufDB8fDB8fHww" alt="wind turbine" width="650" height="613">
            </picture>
        </div>
        <!--Form-->
        <form class="cs-form" id="cs-form-1441" name="Contact Form" method="post">
            <label class="cs-label">
                Name
                <input class="cs-input" required type="text" id="name-1441" name="name" placeholder="Name">
            </label>
            <label class="cs-label cs-email">
                Email
                <input class="cs-input" required type="email" id="email-1441" name="email" placeholder="Email">
            </label>
            <label class="cs-label cs-phone">
                Phone
                <input class="cs-input" required type="number" id="phone-1441" name="phone" placeholder="Phone">
            </label>
            <label class="cs-label">
                Message
                <textarea class="cs-input cs-textarea" required name="Message" id="message-1441" placeholder="Write message..."></textarea>
            </label>
            <button class="cs-button-solid cs-submit" type="submit">Send Message</button>
        </form>
    </div>
</section>
    
    
       @include('home.footer')
  

    </body>
    </html>
    
       
    