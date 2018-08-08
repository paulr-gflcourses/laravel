<?php


class Genre extends Eloquent  {
    protected $table = 'Genre';
    protected $primaryKey = 'GenreId';

    public function tracks()
    {
        return $this->hasMany('Track', 'GenreId', 'GenreId');
    }

        

}
