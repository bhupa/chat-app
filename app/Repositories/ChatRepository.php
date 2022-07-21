<?php


namespace App\Repositories;

use App\Models\Chat;
use App\Models\User;
use App\Repositories\Repository;

class ChatRepository extends Repository
{
    public function __construct(Chat $chat)
    {
        $this->model = $chat;
    }


    public function getChat($my_id){

       return Chat::where('send_by', $my_id)
        ->oRwhere('receive_by', $my_id)
        ->get();
    }

    public function chatNotification($userId,$message)
    {
        $user = User::find($userId);
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
        $token = $user->device_token;

        $firebaseToken = $user->device_token;
        $notification = [
            'title' => 'New Message',
            'body' => $message->sender->name . 'has send new message',
            'sound' => true,
        ];

        $extraNotificationData = ['message' => $notification, 'moredata' => 'dd'];

        $fcmNotification = [
            'to' => $firebaseToken, //single token
            'notification' => $notification,
            'data' => $extraNotificationData,
        ];

        $SERVER_API_KEY = 'AAAAtwHDm3U:APA91bFf9o7MS_kMLk_pkulMbI2P5vpK-j2RvvSFLmhaZQOvNggjzVBY0h98_Hvg_UtT8g0jhjwaS3hgxrdEAQEqvr-3SeGNhzgiiQZt8rlaT_g-7ChJDcpR88aZ55baTqbM27-Tn5XF';

        $dataString = json_encode($fcmNotification);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);
    }

}