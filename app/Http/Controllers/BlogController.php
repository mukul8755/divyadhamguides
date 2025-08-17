<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogs = [
        1 => [
            "title" => "Kashi: The Spiritual Heart of India",
            "author" => "Basant Mishra",
            "date" => "10 June 2025, 10:00 AM",
            "image" => "images/blog/kashi-spiritual.jpg",
            "excerpt" => "Varanasi, or Kashi, is one of the world’s oldest living cities...",
            "content" => "Varanasi, also called Kashi, is known as the spiritual capital of India. Its ghats, temples, and evening aartis create an aura of devotion. Pilgrims come here seeking moksha, believing a dip in the Ganga purifies all sins..."
        ],
        2 => [
            "title" => "Ram Mandir: A Sacred Journey Through Centuries",
            "author" => "Anshu Kumari Pandey",
            "date" => "05 August 2025, 12:00 PM",
            "image" => "images/blog/ram-mandir.jpg",
            "excerpt" => "The Ram Mandir in Ayodhya isn't just a temple...",
            "content" => "The Ram Mandir in Ayodhya symbolizes centuries of devotion. Recently inaugurated, it stands as a majestic temple blending modern architecture with ancient faith. Devotees worldwide visit Ayodhya to experience this divine temple..."
        ],
        3 => [
            "title" => "Triveni Sangam: Gateway to Moksha",
            "author" => "Basant Mishra",
            "date" => "20 June 2025, 06:15 AM",
            "image" => "images/blog/triveni-sangam.jpg",
            "excerpt" => "The confluence of Ganga, Yamuna, and Saraswati...",
            "content" => "At Prayagraj, the Triveni Sangam is considered the most sacred bathing place. During Kumbh Mela, millions gather here for a holy dip. Mythology says even a drop of Sangam water grants liberation..."
        ],
    ];

    public function index()
    {
        $blogs = $this->blogs;
        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = $this->blogs[$id] ?? null;

        if (!$blog) {
            abort(404);
        }

        return view('blogs.show', compact('blog'));
    }
}
