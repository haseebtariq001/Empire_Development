<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class CommonEmailTemplate extends Mailable
{
    use Queueable, SerializesModels;
    public $template;
    public $content;
    public $user_id;
    public $workspace_id;
    public $attachment_paths;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template, $content = null, $user_id, $workspace_id, $attachment_paths = null)
    {
        $this->template = $template;
        $this->content = $content;
        $this->user_id = $user_id;
        $this->workspace_id = $workspace_id;
        $this->attachment_paths = $attachment_paths;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->from(company_setting('mail_from_address', $this->user_id, $this->workspace_id), $this->template->from)
            ->markdown('email.common_email_template')
            ->subject($this->template->subject)
            ->with('content', $this->content);

        if (!empty($this->attachment_paths)) {
            foreach ($this->attachment_paths as $attachmentName => $attachment_path) {
                $capitalizedName = ucwords($attachmentName);
                $file_path = get_file($attachment_path);
                if ($file_path !== null) {
                    $mail->attach(str_replace(' ', '%20', $file_path), ['as' => $capitalizedName]);
                } else {
                    \Log::info('File not found: ' . $file_path);
                }
            }
        }


        return $mail;
    }
}
