<?php
    use Piseth\WallBlocker\Http\Controllers\WallBlockerController;
    Route::get('wall-blocker', function (){
        return view('wb::wallblocker');
    })->name('wall.blocker');
    Route::post('check-wb-key', [WallBlockerController::class, 'checkWBKey'])->name('check.wb.key');
