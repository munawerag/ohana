<!-- jquery Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Form Files -->
<script src="/assets/js/jquery.validate.min.js"></script>
<script src="/assets/js/additional-methods.min.js"></script>
<script src="/assets/js/form-validation.js"></script>
<!-- Intel Input -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
<!-- Custom JS Files -->
<script src="/assets/js/custom.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le_BB0rAAAAAKeyCk05j5e0CIZKF_6lrfr1LMuZ"></script>
<script>
    function refreshCaptcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le_BB0rAAAAAKeyCk05j5e0CIZKF_6lrfr1LMuZ', {
                action: 'contact'
            }).then(function(token) {
                if (document.getElementById('captcha-response-letsDiscuss')) {
                    document.getElementById('captcha-response-letsDiscuss').value = token;
                }
            });
        });
    }
    refreshCaptcha();
</script>
</body>

</html>