<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Kyslik\ColumnSortable\Sortable;

class Ticket extends Model {
    use HasFactory, SoftDeletes, Sortable;

    protected $fillable = [
        'summary',
        'description',
        'status'
    ];

    public $sortable = ['ID', 'Summary', 'Status'];
}
