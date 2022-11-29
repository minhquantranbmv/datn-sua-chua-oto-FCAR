<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    public $fillable = ['title','image','category_news_id', 'description_short', 'description','user_id','status','created_at','view'];
    public function category_news()
    {
        return $this->belongsTo(Categories_new::class, 'category_news_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}