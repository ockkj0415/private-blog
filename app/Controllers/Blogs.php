<?php namespace App\Controllers;
 
class Blogs extends BaseController
{
    public function index()
    {
        $this->loadlayout('home');   
    }
    public function work()
    {
        $this->loadlayout('work');   
    }
    public function workEach()
    {
        $this->loadlayout('work-each');   
    }
    public function study()
    {
        $this->loadlayout('study');   
    }
    public function about()
    {
        $this->loadlayout('about');   
    }
    public function contact()
    {
        $this->loadlayout('contact');   
    }
}