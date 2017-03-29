var postId=0;
var postBodyElement = null;
$('.post').find('.interaction').find('.edit').on('click',function (event) {
postBodyElement= event.target.parentNode.parentNode.childNodes[1];
postId = event.target.parentNode.parentNode.dataset['postid'];

$('#modal-editor').modal();
});

$('#modal-save').on('click',function () {
    console.log("clicked");
    console.log(url);
    $.ajax({
        method:'POST',
        url: url,
        data:{ body:$('#post-body').val(),postId:postId,_token:token}
    })
    .done(function (msg) {
        $(postBodyElement).text(msg['new_body']);
        $('#modal-editor').modal('hide');
    });
});