// Auction routes

use Illuminate\Support\Facades\Route;

Route::get('/auctions', 'AuctionController@index');
Route::post('/auctions', 'AuctionController@store');
Route::get('/auctions/{id}', 'AuctionController@show');
Route::put('/auctions/{id}', 'AuctionController@update');
Route::delete('/auctions/{id}', 'AuctionController@destroy');
