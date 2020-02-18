<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = ['lastname','firstname','postal','prefectures','town','street','tel','user_id'];

  public function user()
  {
    return $this -> belongsTo(User::class);
  }
}
