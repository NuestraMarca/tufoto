@extends('dashboard.pages.layout')

@section('title_page') <i class="gi fa-fw gi-message_new"></i> Mensajes @endsection

@section('breadcrumbs') {!! Breadcrumbs::render('admin.messages') !!} @endsection

@section('content_body_page')
	<div class="block full">
        <div class="table-responsive">
            <table id="example-datatable" class="table table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Texto</th>
                        <th>Fecha de la Boda</th>
                        <th>Fecha de envío</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody> 
                	@foreach($messages as $message)  
		                <tr id="tr-{{$message->id}}"  {!! Html::classes(['info' => $message->isState('new'), 'select']) !!} >
			                <td>{{ $message->name }}</td>
			                <td><strong>{{ $message->email }}</strong></td>
			                <td>{{ $message->cel }}</td>
			                <td>{{ $message->comments }}</td>
			                <td>{{ $message->date }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>{!! Form::select('state', ['new' => 'Sin leer', 'read' => 'Atendido'], null, ['id' => $message->id]) !!}</td>
			            </tr>
		            @endforeach
                </tbody>
            </table>
 
        </div>
    </div>

@endsection

@section('js_aditional')
    <script type="text/javascript">
        $(document).ready(function(){
            var states = {'new': 'info', 'read' : 'none'};
            $("select[name=state]").change(function() {
                var messageId = $(this).attr('id');
                var newState = $(this).val();

                $.ajax({
                    type: "POST",
                    url : "/admin/messages/change/" + messageId,
                    data : {'state': newState},
                    success : function(data){
                        if(data['success']) {
                            var oldState = data['oldState'];
                            $('#tr-' + messageId)
                                .removeClass('info')
                                .addClass(states[newState]);
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
        });
    </script>
@endsection