/*
 *  Document   : AppServices.js
 *  Author     : andrestntx
 *  Description: Custom javascript code used in all Ajax Services
 */

var AppServices = function() {

	var postDelete = function (entityElement, entityId, url, data) {
		var token = $(entityElement).data('token');
		data = data || {'_token': token};
		
		$.ajax({
	        url: url,
	        data: data,
	        dataType:'json',
	        method:'DELETE',
	        success:function(data){
	            if(data['success']){
	                deleteEntity(entityId);
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

	var deleteEntity = function (entityId, entityName) {
		$("#" + entityId).fadeOut(500, function() {
	        $("#" + entityId).remove();
	    });
	};

	var notification = function (type, message) {
		$.bootstrapGrowl("<h4><strong>Atención</strong></h4> <p style='font-size:16px;'>" + message + "</p>", {
	        type: type,
	        delay: 7000,
	        allow_dismiss: true,
	        offset: {from: 'top', amount: 20}
	    });
	};

    return {

		postDeleteEntity: function (entityElement, url) {
			var entityId 	= $(entityElement).data('entity-id');
			postDelete(entityElement, entityId, url);
		},

		postDeletePhoto: function (entityElement, url, photoName) {
			var token 		= $(entityElement).data('token');
			var entityId 	= $(entityElement).data('entity-id');

			data = {'_token': token, 'photo': photoName};
			postDelete(entityElement, entityId, url, data);
		}

		

	};
}();