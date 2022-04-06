<?php

namespace NotificationChannel\Fluut;

use Illuminate\Notifications\Notification;

class FluutChannel {
  public function send ($notifiable, Notification $notification) {
        echo  'FluutChannel';
  }
}