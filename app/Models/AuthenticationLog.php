<?php

/**
 * The MIT License (MIT)
 * Copyright (c) 2024 Bubka
 * Copyright (c) 2024 Anthony Rappa
 * Copyright (c) 2017 Yaakov Dahan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
 * LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property string $authenticatable_type
 * @property int $authenticatable_id
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property \Illuminate\Support\Carbon|null $login_at
 * @property bool $login_successful
 * @property \Illuminate\Support\Carbon|null $logout_at
 * @property bool $cleared_by_user
 * @property array|null $location
 * @property string|null $guard
 * @property string|null $method
 */
class AuthenticationLog extends Model
{
    /**
     * Indicates if the model should be timestamped.
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     */
    protected $table = 'authentication_log';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'ip_address',
        'user_agent',
        'login_at',
        'login_successful',
        'logout_at',
        'cleared_by_user',
        'location',
        'guard',
        'login_method',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'cleared_by_user'  => 'boolean',
        'location'         => 'array',
        'login_successful' => 'boolean',
        'login_at'         => 'datetime',
        'logout_at'        => 'datetime',
    ];

    /**
     * Create a new Eloquent AuthenticationLog instance
     */
    public function __construct(array $attributes = [])
    {
        if (! isset($this->connection)) {
            $this->setConnection(config('authentication-log.db_connection'));
        }

        parent::__construct($attributes);
    }

    /**
     * Get the table associated with the model.
     */
    public function getTable()
    {
        return config('authentication-log.table_name', parent::getTable());
    }

    /**
     * MorphTo relation to get the associated authenticatable user
     *
     * @return MorphTo<\Illuminate\Database\Eloquent\Model, AuthenticationLog>
     */
    public function authenticatable()
    {
        return $this->morphTo();
    }
}
