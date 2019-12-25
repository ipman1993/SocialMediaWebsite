var postId = 0;
var postBodyElement = null;

/*$('.post').find('.interaction').find('a').eq(2).on('click', function (event) {
    event.preventDefault();

    postBodyElement = event.target.parentNode.parentNode.childNodes[1]
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
   $('#post-body').val(postBody);
   $('#edit-modal').modal();
});*/

$('.post-edit').on('click', function (event) {
    event.preventDefault();
    var postBody = $(this).parent().siblings().closest('.post-body');
    postId = $(this).attr('data-postid');
    $('#post-body').val(postBody.html());
    $('#edit-modal').modal();
});

$('#modal-save').on('click', function () {
    $.ajax({
        method: 'POST',
        url: urlEdit,
        data: {
            body: $('#post-body').val(),
            postId: postId,
            _token: token
        }
    }).done(function (msg) {
        $('.post[data-postid="'+postId+'"]').children('p[class="post-body"]').html(msg['new_body']);
        $('#edit-modal').modal('hide');
    });
});


$('.like').on('click', function (event) {
    event.preventDefault();

    postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling == null ? true : false;

    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {
            isLike: isLike,
            postId: postId,
            _token: token
        }
    }).done(function (msg) {
        event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
        if(isLike){
            event.target.nextElementSibling.innerHTML = 'Dislike';
        } else {
            event.target.previousElementSibling.innerHTML = 'Like';
        }
    });
});