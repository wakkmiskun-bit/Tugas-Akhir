use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Form pesan
    public function create() {
        return view('order.pesan');
    }

    // Simpan ke antrian
    public function store(Request $request) {

        Order::create([
            'nama' => $request->nama,
            'whatsapp' => $request->whatsapp,
            'item' => $request->item,
            'harga' => $request->harga,
            'status' => 'menunggu'
        ]);

        return redirect('/riwayat');
    }

    // RIWAYAT USER
    public function riwayat() {
        $orders = Order::latest()->get();
        return view('order.riwayat', compact('orders'));
    }

    // ANTRIAN ADMIN
    public function index() {
        $orders = Order::where('status','menunggu')->get();
        return view('admin.antrian', compact('orders'));
    }

    // UPDATE STATUS
    public function updateStatus(Request $request, Order $order) {
        $order->update([
            'status' => $request->status
        ]);

        return back();
    }
}
