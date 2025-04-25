namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardGaleri extends Component
{
    public $image;

    public function __construct($image = '/storage/assets/galeri.png')
    {
        $this->image = $image;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-galeri');
    }
}
