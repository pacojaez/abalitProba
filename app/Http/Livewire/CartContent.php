<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

use App\Http\Controllers\SendEMailController;

class CartContent extends Component
{
    protected $total;
    protected $content;
    protected $orderItem;
    protected $newOrder;
    protected $product;
    protected $totalWeight;

    // public $abandoned = false;  Property to remarketing TODO

    public $confirmedMessage = false;

    protected $listeners = [
        'productAddedToCart' => 'updateCart',
    ];

    /**
     * Mounts the component on the template.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->totalWeight = Cart::weight();
        // dd(Cart::content());
        // $this->product = Product::findOrFail(Cart::items('id'));
        $this->confirmedMessage = false;
        $this->abandoned = false;
        $this->updateCart();
    }

    /**
     * Renders the component on the browser.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {

        return view('cart.components.cart-content', [
            'total' => $this->total,
            'content' => $this->content,
            'totalWeight' => $this->totalWeight,
            // 'product' => $this->product,
            //'abandoned' => $this->abandoned,   Property to remarketing TODO
        ]);
    }

    /**
     * Removes a cart item by id.
     *
     * @param string $id
     * @return void
     */
    public function removeFromCart(string $id): void
    {
        Cart::remove($id);
        $this->updateCart();
        $this->emitTo('nav-cart', 'refresh');

    }

    /**
     * Clears the cart content.
     *
     * @return void
     */
    public function clearCart(): void
    {
        Cart::clear();
        $this->updateCart();
        $this->confirmedMessage = false;
        $this->emitTo('nav-cart', 'refresh');

    }

    /**
     * Updates a cart item.
     *
     * @param string $id
     * @param string $action
     * @return void
     */
    public function updateCartItem(string $id, string $action): void
    {
        Cart::update($id, $action);
        $this->updateCart();
        $this->emitTo('nav-cart', 'refresh');

    }

    /**
     * Rerenders the cart items and total price on the browser.
     *
     * @return void
     */
    public function updateCart()
    {

        $this->total = Cart::total();
        $this->totalWeight = Cart::weight();
        $this->content = Cart::content();
        $this->emitTo('nav-cart', 'refresh');

    }


    public function checkOut()
    {

        $user_id = Auth::user()->id;
        $adress = Auth::user()->adress;
        $total_units = Cart::items();

        //Recogemos los valores del Cart en variables para poder generar un nuevo registro en la DB

        $this->total = Cart::total();
        $this->content = Cart::content();
        $this->emitTo('nav-cart', 'refresh');

        //Crear una nueva Order para obtner el id y poder referenciar cada OrderItem a él

        $this->newOrder = Order::create([
            // 'status' => 'Pendiente de confirmación',     //ADD NEXT SPRINT
            'user_id' => $user_id,
            // 'units' => $total_units,                     //ADD NEXT SPRINT
            'total' => $this->total,
            'payment_type' => 'VISA',
            'pick_up_day' => '2021-08-15',
            'pick_up_time' => '15:00:00',
            'adress' => $adress,
        ]);

        //crear cada OrderItem en la DB
         foreach( $this->content as $key => $value ){

            OrderItem::create([
                'order_id' => $this->newOrder->id,
                'quantity' => $value['quantity'],
                // 'total_items' => $value['quantity'],     //ADD NEXT SPRINT
                // 'unit_price' => $value['price'],         //ADD NEXT SPRINT
                'user_id' => $user_id,
                'subtotal' => $value['quantity'] * $value['price'],
                'product_id' => $key,
           ]);
        };
        //borrar el carrito tras la confirmacion de que se ha creado
        $this->clearCart();

        //Mandar Mail de confirmacion de recepción del pedido
        // SendEMailController::orderCreated($this->content, $userEmail, $this->newOrder);

        /**
         * TO DO
         * Send a mail to customer and admin to finish the checkout.
         *
         * @return void
         */

        $this->confirmedMessage = true;

    }
}
