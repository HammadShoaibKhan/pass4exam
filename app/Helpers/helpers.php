<?php
use \App\Models\Vendor;

/**to get vendors for header navbar */
function navbarVendors()
{
    return Vendor::orderBy('title', 'ASC')
    ->select('id', 'title', 'slug')
    ->where('status', 1)
    ->take(4)
    ->get();
}