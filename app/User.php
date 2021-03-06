<?php

namespace App;

use App\Book;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isSuperAdmin()
    {
        return $this->administration_level > 1 ? TRUE : FALSE;
    }
    
    public function isAdmin()
    {
        return $this->administration_level > 0 ? TRUE : FALSE;
    }

    public function booksInCart()
    {
        return $this->belongsToMany('App\Book')->withPivot(['number_of_copies', 'bought'])->wherePivot('bought', False);
    }

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function rated(Book $book)
    {
        return $this->ratings->where('book_id', $book->id)->isNotEmpty(); 
    }

    public function bookRating(Book $book)
    {
        return $this->rated($book) ? $this->ratings->where('book_id', $book->id)->first() : NULL;
    }
}
