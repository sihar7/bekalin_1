  <!-- ToTop Button -->
  <button class="scrollup"><i class="fas fa-angle-up"></i></button>

<!-- Javascript Files -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
<script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/counterup.min.js"></script>
<script src="assets/js/vendor/countdown.js"></script>
<script src="assets/js/vendor/waypoints.min.js"></script>
<script src="assets/js/vendor/jquery-ui.js"></script>
<script src="assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="assets/js/vendor/easing.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/main.js"></script>

<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+62878-2206-0939", // WhatsApp number
            instagram: "https://www.instagram.com/sabanaku/", // Line QR code URL
            facebook: "mepy.id", // Facebook URL
            email: "", // Email
            call: "+000000000", // Call phone number
            company_logo_url: "{{asset('assets/images/customer.jpg')}}", // URL of company logo (png, jpg, gif)
            greeting_message: "Hai, apa yang bisa Saya bantu untuk Kamu? Kirimkan pertanyaan Anda dan Kami akan segera membalasnya.", // Text of greeting message
            call_to_action: "Hubungi Media Sosial", // Call to action
            button_color: "#00E676", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,facebook,sms,call", // Order of buttons
            ga: true, // Google Analytics enabled
            branding: false, // Show branding string
            mobile: true, // Mobile version enabled
            desktop: true, // Desktop version enabled
            greeting: true, // Greeting message enabled
            shift_vertical: 0, // Vertical position, px
            shift_horizontal: 0, // Horizontal position, px
            domain: "localhost://sabana/", // site domain
            key: "1QRo1ZQ7TrWm8hWd-AenTw", // pro-widget key
        };
        var proto = document.location.protocol,
            host = "whatshelp.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
