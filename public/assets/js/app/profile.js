/*=========================================================================================
    File Name: profile.js
    Description: Jquery For Profile Setting.
==========================================================================================*/
$(document).ready(function () {
    // variables
    var imgProfilePhoto = $('#img_profile_photo'),
        profilePhoto = $('#profile_photo');

    // Update user photo on click of button
    if (profilePhoto) {
        profilePhoto.on('change', function (e) {
            var reader = new FileReader(),
                files = e.target.files;
            reader.onload = function () {
                if (imgProfilePhoto) {
                    imgProfilePhoto.attr('src', reader.result);
                }
            };
            reader.readAsDataURL(files[0]);
        });
    }

    // Submit Form Profile Information
    // $(".btn_simpan_profile_information").on("click", function (event) {
    //     event.preventDefault();
    //     alert('OK');
    // });
});
