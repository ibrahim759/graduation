</div>
</div>
</div>
</div>
</div>


<!-- Bootstrap and necessary dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<script src="js/restrictions.js"></script>
<script>
    // Function to allow only numbers
    function numbersOnly(event) {
        const charCode = (event.which) ? event.which : event.keyCode;
        // Allow numbers (key codes from 48 to 57) and prevent negative sign (-)
        if (charCode < 48 || charCode > 57 || event.key === '-') {
            event.preventDefault();
        }
    }

    // Function to validate the ID number after input
    function validateIdNumber(input) {
        if (input.value < 0) {
            input.value = ''; // Clear the input if a negative number is entered
            alert("Please enter a positive number."); // You can use other validation methods as well
        }
    }


    // Function to validate Arabic input
    function validateArabic(input) {
        const arabicRegex = /^[\u0600-\u06FF\s]+$/; // Regular expression for Arabic characters
        if (!arabicRegex.test(input.value)) {
            input.value = ''; // Clear the input if non-Arabic characters are entered
            alert("الرجاء إدخال أحرف باللغة العربية فقط."); // You can use other validation methods as well
        }
    }

    // Function to validate English input
    function validateEnglish(input) {
        const englishRegex = /^[A-Za-z\s]+$/; // Regular expression for English characters
        if (!englishRegex.test(input.value)) {
            input.value = ''; // Clear the input if non-English characters are entered
            alert("Please enter English characters only."); // You can use other validation methods as well
        }
    }

    // Function to validate input as alphabetic (Arabic and English letters)
    function validateAlphabetic(input) {
        const alphabeticRegex = /^[\u0600-\u06FFa-zA-Z\s]+$/; // Regular expression for Arabic and English characters
        if (!alphabeticRegex.test(input.value)) {
            input.value = input.value.replace(/[^a-zA-Z\u0600-\u06FF\s]/g, ''); // Remove non-alphabetic characters
            alert("يرجى إدخال أحرف اللغة العربية أو الإنجليزية فقط."); // Display an alert for invalid characters
        }
    }

    // Function to validate input as positive numbers
    function validatePositiveNumber(input) {
        const numberRegex = /^\d+$/; // Regular expression for positive numbers
        if (!numberRegex.test(input.value)) {
            input.value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            alert("يرجى إدخال أرقام "); // Display an alert for invalid characters
        }
    }

    function validatePassportNumber(input) {
        const arabicOrEnglishRegex = /^[\u0600-\u06FFa-zA-Z\s]+$/; // Regex for Arabic or English text
        const positiveNumberRegex = /^\d+$/; // Regex for positive numbers

        if (!arabicOrEnglishRegex.test(input.value) && !positiveNumberRegex.test(input.value)) {
            input.value = input.value.replace(/[^a-zA-Z\u0600-\u06FF\d\s]/g, ''); // Remove characters that are not Arabic, English, or numbers
        }
    }
</script>
</body>

</html>