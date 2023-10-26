<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;
    // class name and table name may be different
    protected $table = 'foods';
    protected $primaryKey = 'id';
    //if you do not want to use created_at/updated_at? [true=display; false=not.display]
    public $timeStamps = true;
    // protected $dateFormat = 'h:m:s';

    // for edit data
    //khi them moi field can cap nhat vao day
    protected $fillable = ['name', 'count', 'description', 'category_id', 'image_path'];

    // a food belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
