/*
 *  Document   : AppProtocolGenerator.js
 *  Author     : andrestntx
 *  Description: Custom javascript code used in Protocol Generator Ajax 
 */

var AppProtocolGenerator = function() {
	
	var ulSortable = '.sortable';

	var token = function () {
		return $('#newQuestion').data('token');
	};

	var questionsArray = function () {
		return $(ulSortable).sortable('toArray');
	};

	var newItemQuestionSortable = function (question) {
		return $(
			'<li class="well well-sm" id="' + question.id + '" style="cursor:pointer">' +
				'<a href="#"><i class="gi gi-bin pull-right text-danger" onclick="AppProtocolGenerator.postDeleteQuestion(this)" data-entity-id="' + question.id + '"></i></a>' +
				'<a href="#" class="editable h4" data-url="/protocol-generator/' + question.id + '" data-pk="' + question.id + '" >' + 
					question.text + 
				'</a>' + 
			'</li>'
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

	var postOrderQuestions = function() {
		if(! jQuery.isEmptyObject(questionsArray())){
			$.ajax({
				url: '/protocol-generator/order',
				data: {_token: token, questions: questionsArray()},
				method:'POST',
				success:function(data){
					console.log(data);
				},
				error:function(){
					$(ulSortable).sortable('cancel');
				}
			});
		}
	};

	var postNewQuestion = function(newQuestion) {
		$.ajax({
	        url: '/protocol-generator',
	        data: {_token: token, newQuestion: newQuestion},
	        method:'POST',
	        success:function(data){
	        	$('#newQuestion').val('');
			    $(ulSortable).append(newItemQuestionSortable(data.question));
			    $(ulSortable).sortable('refresh');
			    postOrderQuestions();
			    initEditable();
	            console.log(data);
	        },
	        error:function(){
	            alert('falló la conexión')
	        }
	    });
	};

	var postDelete = function (entityElement, questionId, url) {

		$.ajax({
	        url: url,
	        data: {'_token': token},
	        dataType:'json',
	        method:'DELETE',
	        success:function(data) {
	            if(data['success']) {
	                deleteQuestion(questionId);
	                notification('info', data['message']);
	            }
	            else{
	            	notification('danger', data['message']);
	            }
	        },
	        error:function(){
	            alert('fallo la conexion');
	        }
	    });
	};

	var deleteQuestion = function (questionId, entityName) {
		$("#" + questionId).fadeOut(400, function() {
	        $("#" + questionId).remove();
	    });
	};

	var initSortable = function(){
		$('.sortable').sortable({
			axis: 'y',
		  	cursor: 'pointer',
		  	cursorAt: { top: 1 },
		  	delay: 150,
		  	opacity: 0.8,
		  	revert: true,
		  	update: function( event, ui ) {
		  		postOrderQuestions();	
		  	}
		}).disableSelection();
	};

	var initEventKeyPress = function () {
		$('#newQuestion').keyup(function (e) {
			if (e.keyCode === 13) {
				var newQuestion = $(this).val();
				if(newQuestion.trim()) {
					postNewQuestion(newQuestion);	
				}				
			}
		});
	};

	var initEditable = function() { 
		$.fn.editable.defaults.mode = 'inline';
		$.fn.editableform.buttons = '';
		$.fn.editableform.template = 
			'<form class="editableform">' +
				'<div class="editable-input" style="width:100%;"></div>' +
				'<div class="editable-error-block"></div>' +
			'</form>';

		$('.editable').editable({
		    type: 'text',
		    placeholder: 'Escriba la Pregunta',
		    title: 'Editar Pregunta',
		    name: 'text',
		    template: '<input type="text" class="form-control"></input>',
		    inputclass: 'h1',
		    validate: function(value) {
				if($.trim(value) == '') 
					return 'La pregunta es requerida';
			},
		    ajaxOptions: {
			    type: 'PUT',
			    dataType: 'json'
			},
			params: {_token: token},
		    
		    success: function(data) {
		        /* actions on success */
		    },
		    error: function(data) {
		        /* actions on validation error (or ajax error) */
		        var msg = '';
		        if(data.errors) {              //validation error
		            $.each(data.errors, function(k, v) { msg += k+": "+v+"<br>"; });  
		        } else if(data.responseText) {   //ajax error
		            msg = data.responseText; 
		        }
		    }
		});
	};


	return {
		
		init: function() {
			initSortable();
			initEventKeyPress();
			initEditable();
		},
		postDeleteQuestion: function (questionElement) {
			var questionId 	= $(questionElement).data('entity-id');
			var url 		= '/protocol-generator/' +  questionId;

			postDelete(questionElement, questionId, url);
		}
	}
}();