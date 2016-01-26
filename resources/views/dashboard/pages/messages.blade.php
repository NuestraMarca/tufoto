@extends('dashboard.pages.layout')

@section('title_page') <i class="gi fa-fw gi-message_new"></i> Mensajes @endsection

@section('breadcrumbs') {!! Breadcrumbs::render('admin.messages') !!} @endsection

@section('content_body_page')
	<div class="block full">
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Texto</th>
                        <th>Fecha de la Boda</th>
                        <th>Fecha de envío</th>
                    </tr>
                </thead>
                <tbody> 
                	@foreach($messages as $message)  
		                <tr>
			                <td>{{ $message->name }}</td>
			                <td><strong>{{ $message->email }}</strong></td>
			                <td>{{ $message->cel }}</td>
			                <td>{{ $message->comments }}</td>
			                <td>{{ $message->date }}</td>
                            <td>{{ $message->created_at }}</td>
			            </tr>
		            @endforeach
                </tbody>
            </table>
 
        </div>
    </div>

@endsection