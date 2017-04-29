<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Employee;


class EmployeeApproval extends Mailable
{
    use Queueable, SerializesModels;

  public $employee;


    public function __construct(Employee $employee)
    {
        $this->employee=$employee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.employee.employee_approval');
    }
}
