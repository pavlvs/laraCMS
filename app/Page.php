<?php

namespace App;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use NodeTrait;

    protected $fillable = [
        'title',
        'url',
        'content'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function updateOrder($order, $orderPage)
    {
        $relative = Page::findOrFail($orderPage);

        if ($order === 'before') {
            $this->beforeNode($relative)->save();
        } elseif ($order === 'after') {
            $this->afterNode($relative)->save();
        } else {
            $relative->appendNode($this);
        }

        Page::fixTree();
    }
}
