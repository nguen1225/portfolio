<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChangePasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    private string $generated_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($generated_url)
    {
        $this->generated_url = $generated_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('password/informationOnChangesPassword')
                    ->subject('【health】パスワード再設定のご案内')
                    ->with(['generated_url' => $this->generated_url]);
    }
}
