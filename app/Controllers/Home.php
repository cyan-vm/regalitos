<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Load the database connection
        $db = \Config\Database::connect();
        $data = [
            'name' => 'Crime and Punishment',
            'description' => 'The most popular work of Fyodor Dostoevsky',
            'price' => 20.99,
            'stock' => 30,
            'tags' => 'literature, classic, novel, russian literature',
            'image' => 'book.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $db->table('products')->insert($data);

        // Fetch product names
        $products = $db->table('products')->select('name')->get()->getResultArray();

        // Pass product names to the view
        $data['products'] = array_column($products, 'name');

        return view('test', $data);
    }

    public function login(): string
    {
        return view('login');
    }

    public function search(): string
    {
        // $db = \Config\Database::connect();
        return view('search'); // Load the search.php view
    }
    public function insertGift(): string
    {
        // $db = \Config\Database::connect();
        return view('insertGift'); // Load the search.php view
    }
    
}
