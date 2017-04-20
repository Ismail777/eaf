<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Candidate;
use App\Position;


class EafProfile extends Mailable
{
    use Queueable, SerializesModels;

    public $candidate;

    public function __construct(Candidate $candidate, Position $position)
    {
         $this->candidate = $candidate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.candidate.profile');
    }
}
