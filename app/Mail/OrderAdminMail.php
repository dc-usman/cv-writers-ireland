<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $attachmentsPath;
    protected $careerlevelname;
    protected $packagename;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request, $files,$career_level_name,$package_name)
    {
        $this->data = $request->all();
        $this->attachmentsPath = $files;
        $this->careerlevelname=$career_level_name;
        $this->packagename=$package_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('email.order-admin')->with(["data" => $this->data]);

        $email = $this->markdown('email.order-admin')->subject('Order Placement')->with(["data" => $this->data,'careerlevelname' => $this->careerlevelname,'packagename'=>$this->packagename]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;
    }
}
