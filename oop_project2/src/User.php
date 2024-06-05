<?php
namespace users;
class User
{
    public $first_name;
    public $last_name;

    public $email;

    public $avatar;

    public function __construct($first_name, $last_name, $email, $avatar)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->avatar = $avatar;
    }
    function full_name()
    {
        echo ($this->first_name . '  ' . $this->last_name);
    }
    function avatarka()
    {
        echo '<img src="' . $this->avatar . '" alt="">';
    }
    function emails()
    {
        echo '<a href="' . $this->email . '">' . $this->email . '</a>';
    }
}