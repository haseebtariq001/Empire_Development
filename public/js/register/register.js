
function generateRandomUsername(name) {
    var username = name.toLowerCase().replace(/[^a-zA-Z0-9]/g, '');
    var randomSuffix = Math.floor(Math.random() * 10000);
    username += randomSuffix;
    return username;
}



function set_inupt(old_value) {
    var initialPreview = [];

    if (old_value) {
        initialPreview.push(old_value);
    }
    $(".input-b2").fileinput({
        'showUpload': false,
        'showRemove': true,
        'required': true,
        'allowedFileExtensions': ["jpg", "png", "jpeg", 'pdf'],
        // 'initialPreview' : [
        //     "<img src='{{ get_file('broker_documents\1700738951_1698830977_78308.pdf') }}' class='file-preview-image' alt='Desert' title='Desert'>",
        // ],
    });
}
$(document).ready(function () {

    $('#togglePassword').on('click', function() {
        var passwordField = $('#password');
        var toggleButton = $('#togglePassword');

        passwordField.attr('type', passwordField.attr('type') === 'password' ? 'text' : 'password');
        toggleButton.toggleClass('bi-eye-slash bi-eye-fill');
    });
    // initiate inputs
    var trade_license = set_inupt($('[name="trade_license"]').val());

    var path = $('#route-name').val();

    $('input#company_suggest').typeahead({
        source: function (query, process) {
            return $.get(path, {
                term: query
            }, function (data) {
                return process(data);
            });
        }
    }).on('typeahead:select', function() {
        // Close the dropdown after selection
        $(this).typeahead('close'); // This might help in closing the dropdown
    });
    
    

    // #website

    $('input#company_suggest').on('change', function () {
        var input_value = $(this).val();

        $.ajax({
            url: '/get-company-detail',
            type: 'GET',
            data: { input_value: input_value },
            success: function (response) {
                if (response.length > 0) {
                    $('#website').val(response[0].website);
                    $('#email').val(response[0].email);
                }
                else {
                    $('#website').val('');
                    $('#email').val('');
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });


    window.Parsley.addValidator('maxfilesize', {
        validateString: function (value, maxSizeStr, parsleyInstance) {
            var maxSize = parseInt(maxSizeStr, 10) * 1024 * 1024;
            var fileInput = parsleyInstance.$element[0];

            if (fileInput.files.length > 0) {
                return fileInput.files[0].size <= maxSize;
            }

            return true;
        },
        messages: {
            en: 'File size exceeds the maximum allowed.'
        }
    });



    $("#create_user_name").on("click", function () {
        var name = $('#fname').val();
        var unique_username = generateRandomUsername(name);
        $('#user_name').val(unique_username);
    });

    initializeIntlInput(".full_mobile", ".mobile");

    initializeIntlInput("#full_mobile", "#mobile_no");
    initializeIntlInput("#full_company_whatsapp", "#company_whatsapp");
    initializeIntlInput("#full_GM_whatsapp", "#GM_whatsapp");
    initializeIntlInput("#full_marketing_director_no", "#marketing_director_no");


});
function initializeIntlInput(hidden_field, input_selector) {
    $(input_selector).intlTelInput({
        initialCountry: "ae",
        autoHideDialCode: true,
        formatOnDisplay: true,
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['ae'],
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    });

    $(input_selector).on('change', function () {
        var code = $(input_selector).intlTelInput("getSelectedCountryData").dialCode;
        $(hidden_field).val(code);
    });
}
