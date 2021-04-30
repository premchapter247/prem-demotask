<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
class userData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:userData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add user data to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask("Please enter your name");
        $email = $this->ask("Please enter your email ID");
        $password = $this->secret('What is the password?');
        if(empty($name) && $name==''){
            $this->info("email could not be blank or null");
            return 1;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->info("Provided email is not a valid email address");
            return 1;
        }
        if(empty($password) && $password==''){
            $this->info("Password can not be blank or null");
            return 1;
        }
        if ($this->confirm('Is this information correct?')) {
            $this->info("Your email id is $email and your $name and you password is $password");
        }
        $userData = New User();
        $userData->name = $name;
        $userData->email = $email;
        $userData->password = $password;
        $userData->save();
        $this-info('User data submitted and saved successfully');        
    }
}