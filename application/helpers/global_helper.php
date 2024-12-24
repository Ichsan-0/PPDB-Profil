<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_settings')) {
    function get_settings($key = '') {
        $CI =& get_instance();

        $row = $CI->db
            ->select('content')
            ->where('key', $key)
            ->get('data_sekolah')
            ->row();

        return $row ? $row->content : null;
    }
}

if (!function_exists('update_settings')) {
    function update_settings($key, $new_content) {
        $CI =& get_instance();

        $CI->db->where('key', $key)
            ->update('data_sekolah', array('content' => $new_content));
    }
}

if (!function_exists('get_school_logo')) {
    function get_school_logo() {
        $file = get_settings('school_logo');
        return base_url('style/img/' . $file);
    }
}
if (!function_exists('get_kop_surat')){
    function get_kop_surat() {
        $file = get_settings('kop_surat');
        return base_url('style/img/' . $file);
    }
}
if (!function_exists('get_nama_bank')){
    function get_nama_bank(){
        return get_settings('nama_bank');
    }
}
if(!function_exists('get_rekening')){
    function get_rekening(){
        return get_settings('no_rekening');
    }
}
if(!function_exists('get_atas_nama')){
    function get_atas_nama(){
        return get_settings('nama_pemilik');
    }
}
if (! function_exists('get_phone')){
    function get_phone(){
        return get_settings('nomor_telepon');
    }
}
if (! function_exists('get_instagram')){
    function get_instagram(){
        return get_settings('instagram');
    }
}

if ( ! function_exists('get_nama_sekolah'))
{
    function get_nama_sekolah()
    {
        return get_settings('nama_sekolah');
    }
}
if ( ! function_exists('get_maps'))
{
    function get_maps()
    {
        return get_settings('gmaps');
    }
}
if ( ! function_exists('get_situs_web'))
{
    function get_situs_web()
    {
        return get_settings('situs_web');
    }
}

if ( ! function_exists('get_alamat'))
{
    function get_alamat()
    {
        return get_settings('alamat');
    }
}
if ( ! function_exists('get_email'))
{
    function get_email()
    {
        return get_settings('email');
    }
}
if ( ! function_exists('get_facebook'))
{
    function get_facebook()
    {
        return get_settings('facebook');
    }
}
if ( ! function_exists('get_twitter'))
{
    function get_twitter()
    {
        return get_settings('twitter');
    }
}
if ( ! function_exists('get_youtube'))
{
    function get_youtube()
    {
        return get_settings('youtube');
    }
}
if(!function_exists('get_deskripsi'))
{
    function get_deskripsi()
    {
        return get_settings('deskripsi');
    }
}
if ( ! function_exists('get_admin_image'))
{
    function get_admin_image()
    {
        $id = get_current_user_id();
        $CI = init();

        $data = $CI->db->select('profile_picture')->where('id', $id)->get('users')->row();
        $profile_picture = $data->profile_picture;

        if ( file_exists('assets/uploads/users/'. $profile_picture))
            $file = $profile_picture;
        else
            $file = 'admin.png';

        return base_url('assets/uploads/users/'. $file);
    }
}

if ( ! function_exists('get_admin_name')) {
    function get_admin_name() {
        $data = user_data();

        return $data->name;
    }
}

if ( ! function_exists('get_user_name'))
{
    function get_user_name()
    {
        $CI = init();
        $id = get_current_user_id();

        $user = $CI->db->query("
            SELECT u.*, c.*
            FROM users u
            JOIN customers c
                ON c.user_id = u.id
            WHERE u.id = '$id'
        ")->row();

        return $user->name;
    }
}

if ( ! function_exists('get_user_image'))
{
    function get_user_image()
    {
        $CI = init();
        $id = get_current_user_id();

        $user = $CI->db->query("
            SELECT u.*, c.*
            FROM users u
            JOIN customers c
                ON c.user_id = u.id
            WHERE u.id = '$id'
        ")->row();

        $picture = $user->profile_picture;
        $file = './assets/uploads/users/'. $picture;

        if ( ! file_exists($file))
            $picture_name = $picture;
        else
            $picture_name = 'admin.png';

        return base_url('assets/uploads/users/'. $picture_name);
    }
}

if ( ! function_exists('get_formatted_date'))
{
    function get_formatted_date($source_date)
    {
        $d = strtotime($source_date);

        $year = date('Y', $d);
        $month = date('n', $d);
        $day = date('d', $d);
        $day_name = date('D', $d);
            
        $day_names = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jum\'at',
            'Sat' => 'Sabtu'
        );
        $month_names = array(
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        );
        $day_name = $day_names[$day_name];
        $month_name = $month_names[$month];

        $date = "$day_name, $day $month_name $year";

        return $date;
    }
}

if ( ! function_exists('format_rupiah')) {
    function format_rupiah($rp)
    {
        return number_format($rp, 2 ,',', '.');
    }
}

if ( ! function_exists('create_product_sku'))
{
    function create_product_sku($name, $category, $price, $stock)
    {
        $name = create_acronym($name);
        $category = create_acronym($category);
        $price = create_acronym($price);
        $stock = $stock;
        $key = substr(time(), -3);

        $sku =  $name.$category.$price.$stock.$key;
        return $sku;
    }
}

if ( ! function_exists('create_acronym'))
{
    function create_acronym($words)
    {
        $words = explode(' ', $words);
        $acronym = '';
        
        foreach ($words as $word)
        {
          $acronym .= $word[0];
        }

        $acronym = strtoupper($acronym);

        return $acronym;
    }
}

if ( ! function_exists('count_percent_discount'))
{
    function count_percent_discount($discount, $from, $num = 1)
    {
        $count = ($discount / $from) * 100;
        $count = number_format($count, $num);

        return $count;
    }
}

if ( ! function_exists('get_product_image'))
{
    function get_product_image($id)
    {
        $CI = init();
        $CI->load->model('product_model');

        $data = $CI->product_model->product_data($id);
        $picture_name = $data->picture_name;

        if ( ! $picture_name)
            $picture_name = 'default.jpg';

        $file = './assets/uploads/products/'. $picture_name;

        return base_url('assets/uploads/products/'. $picture_name);
    }
}

if ( ! function_exists('get_order_status'))
{
    function get_order_status($status, $payment)
    {
        if ($payment == 1)
        {
            // Bank
            if ($status == 1)
                return 'Menunggu pembayaran';
            else if ($status == 2)
                return 'Dalam proses';
            else if ($status == 3)
                return 'Dalam pengiriman';
            else if ($status == 4)
                return 'Selesai';
            else if ($status == 5)
                return 'Dibatalkan';
        }
        else if ($payment == 2)
        {
            //COD
            if ($status == 1)
                return 'Dalam proses';
            else if ($status == 2)
                return 'Dalam pengiriman';
            else if ($status == 3)
                return 'Selesai';
            else if ($status == 4)
                return 'Dibatalkan';
        }
    }
}

if ( ! function_exists('get_payment_status'))
{
    function get_payment_status($status)
    {
        if ($status == 1)
            return 'Menunggu konfirmasi';
        else if ($status == 2)
            return 'Berhasil dikonfirmasi';
        else if ($status == 3)
            return 'Pembayaran tidak ditemukan';
    }
}

if ( ! function_exists('get_contact_status'))
{
    function get_contact_status($status)
    {
        if ($status == 1)
            return 'Belum dibaca';
        else if ($status == 2)
            return 'Sudah dibaca';
        else if ($status == 3)
            return 'Sudah dibalas';
    }
}

if ( ! function_exists('get_month'))
{
    function get_month($mo)
    {
        $months = array(
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        );

        return $months[$mo];
    }
}