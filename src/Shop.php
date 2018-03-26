<?php

namespace cjango\Shop;

class Shop
{

    public function address()
    {
        return new Repositories\AddressRepository();
    }

    public function cart()
    {
        return new Repositories\CartRepository();
    }

    public function category()
    {
        return new Repositories\CategoryRepository();
    }

    public function comment()
    {
        return new Repositories\CommentRepository();
    }

    public function order()
    {
        return new Repositories\OrderRepository();
    }
}
