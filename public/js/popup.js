document.addEventListener("DOMContentLoaded", function () {
    const submitButton = document.getElementById("submitButton");

    submitButton.addEventListener("click", function () {
        Swal.fire({
            title: "Success",
            text: "Your response has been recorded.",
            icon: "success",
            confirmButtonText: "OK"
        });
    });
});
