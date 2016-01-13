<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Mail;

class Message extends Model {

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'messages';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'date', 'comments', 'cel'];

	public $timestamps = true;
	public $increments = true;

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = '2016/01/09';
    }

	/*public function sendEmail()
    {
        $message = $this;
        
        Mail::send('emails.contact', ['contact' => $message], function ($mail) use ($message) {
            $mail->from($message->email, $message->name);
            $mail->to('tufoto.co@gmail.com', 'Johannes Duque')
                ->cc('andresmaopinzon@gmail.com', 'Andrés Pinzón')
                ->subject('Mensaje de contacto en tufoto.co');
        });
    }*/
}