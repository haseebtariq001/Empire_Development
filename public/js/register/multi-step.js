$(function () {
    let current_step = 0;
    let stepCount = 5
    const progress = (value) => {
        document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
    }
    var $sections = $('.step');
    // Function to remove the "required" attribute from all inputs in all steps
function removeRequiredFromAllSteps() {
    $('.step').each(function (index, section) {
        $(section).find('.required-input').removeAttr('required');
    });
}

// Function to add the "required" attribute to inputs in the current step
function addRequiredToCurrentStep() {
    $('.step.current').find('.required-input').attr('required', true);
}

    function navigateTo(index) {
        $sections.removeClass('current').eq(index).addClass('current');
        $('#q-box__buttons #prev-btn').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('#q-box__buttons #next-btn').toggle(!atTheEnd);
        $('#q-box__buttons [Type=submit]').toggle(atTheEnd);

           // Update the required attributes based on the current step
    removeRequiredFromAllSteps(); // Remove "required" from all inputs
    addRequiredToCurrentStep(); // Add "required" to inputs in the current step


        const step = document.querySelector('.step' + index);
        current_step = index;
        progress((100 / stepCount) * (current_step + 1));

    }
    function curIndex() {
        return $sections.index($sections.filter('.current'));
    }
    $('#q-box__buttons #prev-btn').click(function () {
        const registerAsValue = $('input[name="register_as"]:checked').val();
        if (registerAsValue === "Agent" && current_step === 4) {
            navigateTo(0);
        } else {
            navigateTo(curIndex() - 1);
        }
    });
    $('#q-box__buttons #next-btn').click(function () {
        $('#reg-form').parsley().whenValidate({
            group: 'block-' + curIndex()
        }).done(function () {
            const registerAsValue = $('input[name="register_as"]:checked').val();
            if (registerAsValue === "Agent" && current_step === 0) {
                navigateTo(4);
            } else {
                navigateTo(curIndex() + 1);
            }
        });
    });
    $sections.each(function (index, section) {
        $(section).find(':input').attr('data-parsley-group', 'block-' + index);
    });
    navigateTo(0);
});


