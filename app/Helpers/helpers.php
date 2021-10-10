<?php
use \App\Models\Vendor;
use App\Models\Media;
use App\Models\Exam;
use App\Models\User;
use App\Models\Order;

/**to get vendors for header navbar */
function navbarVendors()
{
    return Vendor::orderBy('title', 'ASC')
    ->select('id', 'title', 'slug')
    ->where(['status' => 1, 'top_navbar_vendor' => 1])
        ->has('certifications')
    ->take(4)
    ->get();
}

/**to get popular vendors */
function popularVendors()
{
    return Vendor::orderBy('title', 'ASC')
        ->select('id', 'title', 'slug')
        ->where(['status' => 1, 'popular_tab_vendor' => 1])
        ->has('exams')
        ->take(4)
        ->get();
}

/**to get recent updated exams */
function recentUpdatedExams()
{
    return Exam::orderBy('updated_at', 'DESC')
        ->where('status', 1)
        ->take(9)
        ->get();
}

function removeSpacesAndLowerCase($data)
{
    return str_replace(' ', '', strtolower($data));
}

function getMediaFile($linkTable, $linkType, $linkID)
{
    return Media::where([
        'link_table' => $linkTable,
        'link_type' => $linkType,
        'link_id' => $linkID
        ])->value('file_name');
}

/**to get Carts Total Count */
function getCartTotalCount(){
    $carts = session()->get('carts',[]);
    return count($carts);
}
/**to get userName */
function getuserName($id=null){
    if ($id != null && User::where('id', $id)->exists()) {
        $user = User::find($id);
        return $user->name;
    }
    return null;
}

/**to get Current Today Total order Count */
function getTodayTotalOrderCount(){
    $date =  date('Y-m-d');
    $order_count = Order::Where('created_at', 'like', $date.'%')->where('status',1)->count();   
    return $order_count;
}