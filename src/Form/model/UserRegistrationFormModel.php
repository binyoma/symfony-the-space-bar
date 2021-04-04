<?php


namespace App\Form\model;


use App\Validator\UniqueUser;
use Symfony\Component\Validator\Constraints as Assert;


class UserRegistrationFormModel
{
    /**
     * @Assert\NotBlank(message="Please enter an email")
     * @Assert\Email()
     * @UniqueUser()
     */
    public $email;

    /**
     * @Assert\NotBlank(message="choose a password")
     * @Assert\Length(min="5", minMessage="come on, you can think of a password longer than that")
     */
    public $plainPassword;

    /**
     * @Assert\IsTrue(message="You must agree to our terms")
     */
    public $agreeTerms;

}