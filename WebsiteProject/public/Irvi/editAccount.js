$(document).ready(function () {
    $("#editProfileButton").click(function () {
        // Make input fields writable
        $("input").prop("readonly", false);
        // Show save changes button
        $("#regDate").prop("readonly",true);
        $("#inputEmailAddress").prop("readonly",true);

        $("#saveChangesButton").removeClass("invisible");
        $("#editProfileButton").addClass("invisible");
        $('#editPhotoInput').removeClass("invisible");
        $('#editPhotoButton').removeClass("d-none");

        // Show add new photo button and help text
        $("#profilePictureCard .img-account-profile").addClass("editable");
        $("#profilePictureCard .btn-primary").removeClass("invisible");
        $("#help_text").removeClass("invisible");
        // Hide order history card
        $("#myOrdersCard").addClass("invisible");
    });

    $("#saveChangesButton").click(function () {
        // Make input fields readonly
        $("#editProfileButton").removeClass("invsible");

        $("input").prop("readonly", true);
        // Hide save changes button
        $("#saveChangesButton").addClass("invisible");
        // Hide add new photo button and help text
        $('#editPhotoInput').addClass("invisible");
        $('#editPhotoButton').addClass("d-none");


        $("#profilePictureCard .img-account-profile").removeClass("editable");
        $("#profilePictureCard .btn-primary").addClass("invisible");
        $("#help_text").addClass("invisible");
        // Show order history card
        $("#myOrdersCard").removeClass("invisible");


        var inputs=document.getElementsByTagName("input")

        
    });

    document.getElementById('editPhotoButton').addEventListener('click', function() {
        document.getElementById('editPhotoInput').click();
    });
    
    document.getElementById('editPhotoInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profilePhoto').src = e.target.result;
        };
        reader.readAsDataURL(file);
    });
});