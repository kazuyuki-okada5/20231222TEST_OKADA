<?php

namespace App\Models;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contacts extends Model
{
  use HasFactory;

  protected $fillable = ['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'type', 'detail'];

  public static $rules = array(
    'first_name' => 'required',
    'last_name' => 'required',
    'gender' => 'required',
    'email' => 'required',
    'email' => 'email',
    'tell' => 'required',
    'tell' => 'digits:5',
    'address' => 'required',
    'type' => 'required',
    'detail' => 'required',
    'detail' => 'max:120'
  );
  public function getDetail()
  {
    $txt = 'ID:' . $this->id . ' ' . $this->first_name . $this->last_name . $this->gender . $this->email . $this->tell . $this->address  . $this->type . $this->detail;
    return $txt;
  }
  public function book()
  {
    return $this->hasOne('App\Models\Book');
  }
  public function books()
  {
    return $this->hasMany('App\Models\Book');
  }
}
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [AuthController::class, 'admin']);
});
Route::get('/admin', [AuthController::class, 'admin']);

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/find', [ContactController::class, 'find']);
Route::post('/find', [ContactController::class, 'search']);
