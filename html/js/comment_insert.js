$(document).ready(function() {
  //this will fire once the page has been fully loaded
  $('#comment-post-btn').click(function() {
    comment_post_btn_click();
  });


});


function comment_post_btn_click() {
  //Text within textarea which the person has entered
  var _comment = $('#comment-post-text').val();
  var _userId = $('#userId').val();
  var _userName = $('#userName').val();

  if(_comment.length > 0 && _userId != null) {
    //proceed with our ajax callback
    $('.comment-insert-container').css('border', '1px solid #e1e1e1');

    $.post("/ajax/comment_insert.php" ,
          {
            task : "comment_insert",
            userId : _userId,
            comment : _comment
          }

        )
        // .error(
        //   function() {
        //     console.log("Error:");
        //   }
        // )
        .done(
          function(data) {
            comment_insert(jQuery.parseJSON(data));
            console.log("ResponseText:" + data);
          }
        );

    console.log(_comment + "UserNmae:" + _userName + "UserId:" + _userId);
  }else {
    //the textarea is empty, lets put a border of red on it
    $('.comment-insert-container').css('border', '1px solid #ff0000');
    console.log("The text area was empty");
  }


  //remove the text from the textarea, ready for another comment possibly
  $('#comment-post-text').val("");
}

function comment_insert(data) {
  var t = ''
  t += '<li class="comment-holder" id="_'+data.comment_id+'">';
  t += '  <div class="comment-body">';
  t += '    <h3 class="username-field">'+data.userName+'</h3>';
  t += '  <div class="comment-date"></div>';
  t += '  <div class="comment-text">'+data.comment+'</div>';
  t += '</div>';

  t += '<div class="comment-buttons-holder">';
  t += '  <ul>';
  t += '    <li class="delete-btn">X</li>';
  t += '  </ul>';
  t += '</div>';
  t += '</li>';

  $('.comments-holder-ul').prepend(t);
}
