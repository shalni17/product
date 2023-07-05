var categorySelect = $('#category');
var typeInput = $('#type');
var priceInput = $('#price');
var quantityInput = $('#quantity');
var imageInput = $('#image');


$(document).ready(function () {
    $('#submit').on('click', function () {
        if (typeInput.val() === '') {
            typeInput.addClass("is-invalid")
        } else {
            typeInput.removeClass("is-invalid");
            typeInput.addClass("is-valid");
        }


        if (priceInput.val() === '') {
            priceInput.addClass("is-invalid")
        } else {
            priceInput.removeClass("is-invalid");
            priceInput.addClass("is-valid");
        }


        if (quantityInput.val() === '') {
            quantityInput.addClass("is-invalid")
        } else {
            quantityInput.removeClass("is-invalid");
            quantityInput.addClass("is-valid");
        }


        if (imageInput.val() === '') {
            imageInput.addClass("is-invalid")
        } else {
            imageInput.removeClass("is-invalid");
            imageInput.addClass("is-valid");
        }

        if (categorySelect.val() === '') {
            categorySelect.addClass("is-invalid")
        } else {
            categorySelect.removeClass("is-invalid");
            categorySelect.addClass("is-valid");
        }
    })
})


var touchtextarea = $('#touch');


$(document).ready(function () {
    $('#button').on('click', function () {
        if (touchtextarea.val() === '') {
            touchtextarea.addClass("is-invalid")
        } else {
            touchtextarea.removeClass("is-invalid");
            touchtextarea.addClass("is-valid");
        }
    })
})



$(document).ready(function () {
    $("#switch").click(function () {
        $('#shipping_address').toggle()
    });
});


var usernameInput = $('#username');

$(document).ready(function () {
    $('#checkout').on('click', function () {
        if (usernameInput.val() === '') {
            usernameInput.addClass("is-invalid")
        } else {
            usernameInput.removeClass("is-invalid");
            usernameInput.addClass("is-valid");
        }

        if (usernameInput.val() === '') {
            usernameInput.addClass("is-invalid")
        } else {
            usernameInput.removeClass("is-invalid");
            usernameInput.addClass("is-valid");
        }
    })
})

