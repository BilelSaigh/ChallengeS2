    var statutCheckbox = document.getElementById("comment");
    statutCheckbox.addEventListener("change", function() {
    var statut = this.checked ? 1 : 0;

    $.ajax({
    type: "POST",
    url: "/addcomment",
    data: { action: "addCommentOption" , statut: statut},
    success: function(response) {
    console.log(response)
    Swal.fire({
    icon: 'success',
    title: 'Successful',
    text: 'A section comment is now available on this page',
    showConfirmButton: false,
    timer: 1500
});
},
    error:function (error) {
    Swal.fire({
    icon: 'error',
    title: 'A problem has been encountered',
    text: 'Call the 0652144163',
    showConfirmButton: false,
    timer: 1500
});
}
});
});
