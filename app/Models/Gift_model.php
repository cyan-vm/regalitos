<?php
namespace App\Models;

defined('BASEPATH') OR exit('No direct script access allowed');

use CodeIgniter\Model;

class Gift_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    // Función para obtener todos los productos
    public function get_all_products() {
        return $this->db->get('products')->result();
    }

    // Función para obtener un producto por su ID
    public function get_product_by_id($id) {
        return $this->db->get_where('products', array('id' => $id))->row();
    }

    // Función para obtener todos los productos de una categoría específica
    public function get_products_by_category($category_id) {
        return $this->db->get_where('products', array('category_id' => $category_id))->result();
    }

    // Función para obtener todas las categorías de productos
    public function get_all_categories() {
        return $this->db->get('categories')->result();
    }

    // Función para obtener todos los clientes
    public function get_all_customers() {
        return $this->db->get('customers')->result();
    }

}
