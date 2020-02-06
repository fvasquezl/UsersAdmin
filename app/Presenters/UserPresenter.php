<?php
 namespace App\Presenters;

 use Illuminate\Support\HtmlString;

 Class UserPresenter extends Presenter
 {
     public function userCreatedat()
     {
         return new HtmlString("{$this->model->created_at->diffForHumans()}");
     }
 }
