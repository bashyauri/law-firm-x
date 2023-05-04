<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Notifications\ClientImageNotification;
use Illuminate\Console\Command;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;

class CheckProfileImageCommand extends Command
{
    use Notifiable;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-profile-image-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $clients = Client::where("profile_image",null)->get();

        foreach ($clients as $client) {
            Notification::send($client, new ClientImageNotification());
        }
    }
}