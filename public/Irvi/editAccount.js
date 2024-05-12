$(document).ready(function () {
    $("#editProfileButton").click(function () {
        // Make input fields writable
        $("input").prop("readonly", false);
        // Show save changes button
        $("#regDate").prop("readonly",true);
        $("#saveChangesButton").removeClass("invisible");
        $("#editProfileButton").addClass("invisible");
        // Show add new photo button and help text
        $("#profilePictureCard .img-account-profile").addClass("editable");
        $("#profilePictureCard .btn-primary").removeClass("invisible");
        $("#help_text").removeClass("invisible");
        // Hide order history card
        $("#myOrdersCard").addClass("invisible");
    });

    $("#saveChangesButton").click(function () {
        // Make input fields readonly
        $("#editProfileButton").removeClass("invisible");

        $("input").prop("readonly", true);
        // Hide save changes button
        $("#saveChangesButton").addClass("invisible");
        // Hide add new photo button and help text
        $("#profilePictureCard .img-account-profile").removeClass("editable");
        $("#profilePictureCard .btn-primary").addClass("invisible");
        $("#help_text").addClass("invisible");
        // Show order history card
        $("#myOrdersCard").removeClass("invisible");
    });
});