$(document).ready(function() {

    // Form Validation
    $("#faculty_user_btn").click(() => {
        const form = $('#add_faculty_user');
        const inputs = $('input');

        let all_text = true;

        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i].value.trim() === "") {
                all_text = false;
                break;
            }
        }

        if (!all_text) {
            alert("Please fill in all required fields.");
        }
    });

    // Multi-step Form
    let current = 1,
        current_step, next_step, steps;

    steps = $("fieldset").length;

    $(".next").click(function() {
        current_step = $(this).parent().parent();
        next_step = $(this).parent().parent().next();
        next_step.show();
        current_step.hide();
        setProgressBar(++current);
    });

    $(".previous").click(function() {
        current_step = $(this).parent().parent();
        next_step = $(this).parent().parent().prev();
        next_step.show();
        current_step.hide();
        setProgressBar(--current);
    });

    setProgressBar(current);

    // Change progress bar action
    function setProgressBar(currentStep) {
        let percent = parseFloat(100 / steps) * currentStep;
        percent = percent.toFixed();

        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent + "%");
    }
});