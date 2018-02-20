<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class MessageNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }
    public function toTelegram($message)
    {
        return TelegramMessage::create()
            ->to(45177248)
            ->content("*Сообщение*\n *Имя:* ".$message->name.
                "\n *Почта:* ".$message->email.
                "\n *Тема:* ".$message->subject.
                "\n *Текст:* ".$message->message);
        /* ->content("*Заказчик:* " . $user . "\n*Грузоперевозка - Заказ принят!*\n*Ид:* " . $order->id . "\n*Тариф:* " . $order->tarifName() . "\n*Количество грузчиков:* " . $order->persons . "\n*Авто:* " . $order->getCarName() . "\n" . $unit . $order->unit . "\n*Имя:* " . $order->name . "\n*Тел:* " . $order->phone . "\n*Откуда:* " . $order->address_A . "\n*Куда:* " . $order->address_B . "\n*Время подачи:* " . $order->start_time . "\n*Цена:* " . $order->sum
         );*/

    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
