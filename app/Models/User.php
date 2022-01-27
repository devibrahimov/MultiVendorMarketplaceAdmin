<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'aprovel',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class)->withDefault();
    }

    public static function updateInformations($request){

        try {

            $name = $request->name;
            $surname = $request->surname;
            $email = $request->email;
            $number = $request->number;


            $id = auth('user')->user()->id;


            $user =   User::find($id);

            $user->email  = $email;

            $user->save();

            $data = [
                'name' => $name,
                'email' => $email,
                'surname' => $surname,
                'number' => $number,
            ];
            DB::table('users')->where('id',$id)->update($data);

            $response = [
                'status' =>1,
                'message'=> 'Təbriklər Qeydiyyatınız uğurla başa çatmışdır.Artıq Sizində mağazanız var'
            ];

            return $response;
        }catch (\Exception $e){

            $response = [
                'status' => 0,
                'message' =>$e->getMessage()
            ];

            return $response;
        }

    }

}
