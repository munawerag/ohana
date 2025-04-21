jQuery.validator.addMethod(
  "lettersonly",
  function (value, element) {
    return this.optional(element) || /^[a-z][a-z\s]*$/i.test(value);
  },
  "Letters only please"
);

jQuery.validator.addMethod(
  "Email",
  function (value, element) {
    return (
      this.optional(element) ||
      /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i.test(value)
    );
  },
  "Please enter valid email"
);

jQuery.validator.addMethod(
  "number_validate",
  function (value, element) {
    return (
      this.optional(element) ||
      /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/i.test(value)
    );
  },
  "Please enter valid number"
);

jQuery.validator.addMethod(
  "url_validate",
  function (value, element) {
    return (
      this.optional(element) ||
      /(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[-A-Z0-9+&@#\/%=~_|$?!:,.])*(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[A-Z0-9+&@#\/%=~_|$])/i.test(
        value
      )
    );
  },
  "Please enter valid URL"
);

// Getting page URL
$(document).ready(function () {
  var pageURL = jQuery(location).attr("href");
  $('.hiddenUrl').append().val(pageURL);
});

$("#newsletter").validate({
  rules: {
    selectSpec: {
      required: true,
    },

    email: {
      required: true,
      Email: true,
      maxlength: 50,
    },


  },

  submitHandler: function (form) {
    jQuery(form).find(".tab_1_loader").show();
    jQuery(form).find(".submit-newsletter-form").hide();

    $.ajax({
      url: "/mail_popup_newsletter.php",
      type: 'POST',
      data: new FormData(form),
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        jQuery(form).find(".tab_1_loader").hide();
        jQuery(form).find(".response-output").show();
        jQuery(form)[0].reset();
        $('.clear-select').prop('selectedIndex', 0);


        setTimeout(function () {
          jQuery(form).find(".response-output").hide();
          jQuery(form).find(".submit-newsletter-form").show();
        }, 5000);
        refreshCaptcha();
      },
    });
  },
});

$("#contact-us").validate({
  rules: {
    selectSpec: {
      required: true,
    },
    yourname: {
      required: true,
      lettersonly: true,
      maxlength: 50,
    },
    email: {
      required: true,
      Email: true,
      maxlength: 50,
    },
    check: {
      required: true,
    },
    check1: {
      required: true,
    },
    phone: {
      required: true,
      number_validate: true,
      minlength: 7,
      maxlength: 50,
    },
    message: {
      maxlength: 500,
      required: true,
    },

  },

  submitHandler: function (form) {
    jQuery(form).find(".tab_1_loader").show();
    jQuery(form).find(".submit-contact-us-form").hide();

    $.ajax({
      url: "/mail_popup_contact_us.php",
      type: 'POST',
      data: new FormData(form),
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        jQuery(form).find(".tab_1_loader").hide();
        jQuery(form).find(".response-output").show();
        jQuery(form)[0].reset();
        $('.clear-select').prop('selectedIndex', 0);


        setTimeout(function () {
          jQuery(form).find(".response-output").hide();
          jQuery(form).find(".submit-contact-us-form").show();
        }, 5000);
        refreshCaptcha();
      },
    });
  },
});