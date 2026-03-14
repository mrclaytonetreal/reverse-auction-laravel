<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;  // Assuming you have an Auction model

class AuctionController extends Controller
{
    public function index()
    {
        // Fetch all auctions
        $auctions = Auction::all();
        return response()->json($auctions);
    }

    public function show($id)
    {
        // Fetch a specific auction by ID
        $auction = Auction::find($id);
        if (!$auction) {
            return response()->json(['message' => 'Auction not found'], 404);
        }
        return response()->json($auction);
    }

    public function store(Request $request)
    {
        // Validate and create a new auction
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'starting_bid' => 'required|numeric',
        ]);

        $auction = Auction::create($request->all());
        return response()->json($auction, 201);
    }

    public function update(Request $request, $id)
    {
        // Validate and update an existing auction
        $auction = Auction::find($id);
        if (!$auction) {
            return response()->json(['message' => 'Auction not found'], 404);
        }
        $request->validate([
            'title' => 'string',
            'description' => 'string',
            'starting_bid' => 'numeric',
        ]);

        $auction->update($request->all());
        return response()->json($auction);
    }

    public function destroy($id)
    {
        // Delete an auction
        $auction = Auction::find($id);
        if (!$auction) {
            return response()->json(['message' => 'Auction not found'], 404);
        }
        $auction->delete();
        return response()->json(['message' => 'Auction deleted successfully']);
    }
}