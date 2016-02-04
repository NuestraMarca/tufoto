/*
 *  Document   : AppLanding.js
 *  Author     : andrestntx
 *  Description: Custom javascript code used in Protocol Generator Ajax 
 */

var AppLanding = function() {

	var newCommentItem = function (comment, client) {
		return $(
			'<article class="comment">' +
				'<span class="letter-comment">' + client.first_letter + '</span>' +
				'<div class="text-comment">' +
					'<h2 class="name-comment">' + client.name + ' <span class="date">' + comment.created_at_hummans + '</span></h2>' +
					'<p class="body-comment">' + comment.body + '</p>' +
				'</div>' +
			'</article>'
		);
	};

	var notification = function (type, message) {
		$.bootstrapGrowl("<h4><strong>Atención</strong></h4> <p style='font-size:16px;'>" + message + "</p>", {
	        type: type,
	        delay: 7000,
	        allow_dismiss: true,
	        offset: {from: 'top', amount: 20}
	    });
	};

	var dactivateQuestion = function (questionElement, state) {
		if(state){
			$(questionElement).removeClass('gi-thumbs_up').addClass('gi-thumbs_down');
			$(questionElement)
				.parent()
					.removeClass('btn-success')
					.addClass('btn-warning')
					.attr('title', 'Desactivar Pregunta')
					.attr('data-original-title', 'Desactivar Pregunta');
		}
		else{
			$(questionElement).removeClass('gi-thumbs_down').addClass('gi-thumbs_up');
			$(questionElement)
				.parent()
					.removeClass('btn-warning')
					.addClass('btn-success')
					.attr('title', 'Activar Pregunta')
					.attr('data-original-title', 'Activar Pregunta');
		}
	};

	var initFormComment = function () {
		$("#form-comment").submit(function(e){
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var text = $("#body").val();
            var post = $("#post").val();

            $.ajax({
                type: "POST",
                url : "/comentar",
                data : {'comment-name': name, 'comment-email': email, 'comment-body': text, 'post': post},
                success : function(data){
                	if(data['success']) {
                		console.log(data['comment']);
	                	comment = newCommentItem(data['comment'], data['client']);
	                	$('#article-comments').prepend(comment).hide().fadeIn(1000);
	                	$("#form-comment #name").val("");
	                	$("#form-comment #email").val("");
	                	$("#form-comment #body").val("");
	                	goog_report_conversion_3();
		            }
		            else{
		            	//notification('danger', data['message']);
		            }
                },
                error: function(){
                	alert('falló la conexión');
                }
            },"json");
    	});
	};



	return {
		
		init: function() {
			initFormComment();
		}
	}
}();