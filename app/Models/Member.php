<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function task()
    {
        return $this->hasMany(Task::class, 'member_id');
    }

    public function owner_task()
    {
        return $this->hasMany(Task::class, 'owner_id');
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id');
    }

    public function mapping()
    {
        return $this->belongsToMany(KPI::class, 'kpi_mapping', 'employee_id', 'kpi_id');
    }
}
