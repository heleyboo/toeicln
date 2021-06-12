<?php

namespace App;

use App\Scopes\DraftScope;
use App\Tools\Markdowner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItem extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'menu_id', 
        'parent_id', 
        'depth', 
        'text', 
        'link'
    ];

    /**
     * Get the menu for the menuitem.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function menu()
     {
         return $this->belongsTo(Menu::class);
     }

    /**
    * Get the menu for the menuitem.
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function parent()
    {
        return $this->belongsTo(MenuItem::class);
    }


    /**
    * Get the articles for the category.
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function children()
    {
        return $this->hasMany(MenuItem::Class, 'parent_id');
    }

}
