<?php

namespace AppModels;

use IlluminateDatabaseEloquentFactoriesHasFactory;
use IlluminateDatabaseEloquentModel;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];
}