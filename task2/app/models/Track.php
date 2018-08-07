<?php


class Track extends Eloquent  {
    protected $table = 'Track';
    protected $primaryKey = 'TrackId';
    
    public function genre()
    {
       return $this->belongsTo('Genre', 'GenreId', 'GenreId');
    }

    public function album()
    {
       return $this->belongsTo('Album', 'AlbumId', 'AlbumId');
    }
        

}
