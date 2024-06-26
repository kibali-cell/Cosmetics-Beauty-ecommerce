<footer>
    <div class="footer-container">
        <!--**comoany-box**-->
        <div class="footer-company-box">
            <!--logo-->
            <a href="#" class="footer-logo">Logo</a>
            <!--details-->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quas neque repudiandae nihil.</p>
            <!--social-box-->
            <div class="footer-social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <!--**link-box***-->
        <div class="footer-link-box">
            <strong>Main Link's</strong>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
            </ul>
        </div>
        <!--**link-box***-->
        <div class="footer-link-box">
            <strong>External Link's</strong>
            <ul>
                <li><a href="#">Our Product's</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Trem's and Condition's</a></li>
            </ul>
        </div>
        <!--**link-box***-->
        <div class="footer-link-box">
            <strong>Our Product's</strong>
            <ul>
                <li><a href="#">Skin Care</a></li>
                <li><a href="#">Hair Care</a></li>
                <li><a href="#">Nail's Polish</a></li>
                <li><a href="#">Eye Liner's</a></li>
            </ul>
        </div>

    </div>

    <!--**bottom**********************-->
    <div class="footer-bottom">
        <span class="footer-owner">Made By Going-To Internet</span>
        <span class="copyright">&#169; Copyright 2022 -  Going-To Internet</span>
    </div>
</footer>



<!--==Jquery==========================-->
<script src="{{asset('js/jquery-3.7.1.js')}}"></script>


<script>
    const faqItems = Array.from(document.querySelectorAll('.cs-faq-item'));
    for (const item of faqItems) {
        const onClick = () => {
            item.classList.toggle('active');
        };
        item.addEventListener('click', onClick);
    }
                                       
    
</script>


<script>
/*==li active color===================*/
var selector = '.new-p-heading li';

$(selector).on('click', function(){
$(selector).removeClass('active');
$(this).addClass('active');
});
/*==filter=============================*/
$(document).ready(function(){
        $('.filter-list').click(function(){
            const value = $(this).attr('data-filter');
            if(value == 'all'){
                $('.new-product-box-wrapper').show('1000');
            }
            else{
                $('.new-product-box-wrapper').not('.'+value).hide('1000');
                $('.new-product-box-wrapper').filter('.'+value).show('1000');
            }
        });
    });       
    
</script>