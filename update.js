document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.openModalBtn5').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-id');
            console.log("Button clicked, user ID: " + userId);
            document.querySelector('#myModal5 input[name="user_id"]').value = userId;
            $('#myModal5').modal('show');
        });
    });
});

