<?php

namespace App\Controllers;

use Pusher\Pusher;
use CodeIgniter\HTTP\Request;

class Broadcast extends BaseController
{
    public function index(): string
    {
        return view('pusher/form');
    }

    public function kirim()
    {
        $pesan = $this->request->getVar('pesan');

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
          );        
        $pusher = new Pusher(
            '5598ce61805bbf937e44',
            '5280c3aa764423536b1c',
            '1953025',
            $options
        );
        
        $data['message'] = $pesan;
        $pusher->trigger('codeigniter4', 'my-event', $data);
        return redirect()->route('pusher');
    }

    public function notifikasi()
    {
        return view('pusher/notifikasi');
    }
}
