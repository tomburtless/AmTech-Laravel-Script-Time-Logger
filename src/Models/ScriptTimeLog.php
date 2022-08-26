<?php

namespace AmericanTechnologies\ScriptTimeLogger\Models;

use Illuminate\Database\Eloquent\Model;

class ScriptTimeLog extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "script_time_logs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cron',
        'duration',
        'note'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
