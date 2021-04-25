<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'article_id', 'user_id'

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }


    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
